<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\SubjekLes;
use App\TingkatLes;
use App\TransaksiDetail;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LesController extends Controller
{
    public function showLesLagi()
    {
        $tampilkan_data = Auth::user()->les()->paginate(10);
        $tingkat = TingkatLes::where('id_guru', Auth::user()->id)->get();
        $subjek = SubjekLes::where('id_guru', Auth::user()->id)->get();
        return view('guru/content/les/showLes', compact('tampilkan_data',  'tingkat', 'subjek'));
    }

    public function showLes()
    {
        $tampilkan_data = Auth::user()->les()->paginate(10);
        $tingkat = TingkatLes::where('id_guru', Auth::user()->id)->get();
        $subjek = SubjekLes::where('id_guru', Auth::user()->id)->get();
        return view('guru/content/les/show', compact('tampilkan_data',  'tingkat', 'subjek'));
    }

    public function showDetailLes(Les $tampilkan_data)
    {
        return view('guru/content/les/showDetail', compact('tampilkan_data'));
    }

    public function tambahLes()
    {
        $user_id = Auth::user()->id;
        $tingkat = TingkatLes::where('id_guru',  $user_id)->get();
        $subjek = SubjekLes::where('id_guru', $user_id)->get();
        return view('guru/content/les/tambah', compact('tingkat', 'subjek'));
    }

    public function postTambahLes(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min  karakter ya !!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya !!!',
        ];
        $this->validate($request, [
            'judul' => 'required|min:5|max:255',
            'jam' => 'required',
            'deskripsi' => 'required',
            'pertemuan' => 'required|numeric',
            'harga' => 'required',
        ], $messages);

        $check = Les::where('id_guru', Auth::user()->id)->first();
        if (!$check) {
            $post = new Les;
            $post->judul = $request->judul;
            $post->jam = $request->jam;
            $post->deskripsi = $request->deskripsi;
            $post->pertemuan = $request->pertemuan;
            $post->harga = $request->harga;
            Auth::user()->les()->save($post);
        }
        return redirect('guru/showLesLagi')->with('alert', 'Data Les Berhasil ditambah');
    }

    public function postUpdateLes(Request $request, $id_les)
    {
        $request->validate([
            'judul' => 'required',
            'jam' => 'required',
            'deskripsi' => 'required',
            'pertemuan' => 'required',
            'harga' => 'required',
        ]);

        $update = [
            'judul' => $request->judul,
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
            'pertemuan' => $request->pertemuan,
            'harga' => $request->harga,
        ];

        $update['judul'] = $request->get('judul');
        $update['jam'] = $request->get('jam');
        $update['deskripsi'] = $request->get('deskripsi');
        $update['pertemuan'] = $request->get('pertemuan');
        $update['harga'] = $request->get('harga');

        // Auth::user()->les($id_les)->update($update);
        Les::where('id_les', $id_les)->update($update);
        return redirect('guru/showLes')->with('alert', 'Data Les Berhasil diperbarui');
    }

    public function hapusLes(Les $tampilkan_data)
    {
        Les::destroy($tampilkan_data->id_les);
        return redirect('guru/showLes')->with('alert', 'Les Berhasil Dihapus!');
    }

    //=================Murid Les===================
    public function showMuridLes()
    {
        $guru = Auth::user()->id;
        $murid = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksidetails.id_guru', '=', $guru)
            ->where('status_detail', '=', "Berhasil")
            ->orderBy('transaksis.id_trans', 'desc')
            ->get();

        return view('guru/content/les/showMuridLes', compact('murid'));
    }

    public function showDetailMurid(TransaksiDetail $murid)
    {
        $id_trans = $murid->id_trans;
        $id_guru = Auth::user()->id;
        $transs = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_trans', '=', $id_trans)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        $subjek = SubjekLes::where('id_guru', '=', $id_guru)->get();
        return view('guru/content/les/showMuridDetail', compact('transs', 'murid', 'guru', 'subjek'));
    }

    public function updateDataMurid(Request $request, TransaksiDetail $murid)
    {
        $id_detail = $murid->id_detail;
        if ($request->isMethod('post')) {

            $data = $request->all();

            TransaksiDetail::where(['id_detail' => $id_detail])->update([
                'status_belajar' => $data['status_belajar']
            ]);
            return redirect('guru/showMuridLes')->with('alert', 'Status Berhasil Diubah');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\SubjekLes;
use App\TingkatLes;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LesController extends Controller
{
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
        $post = new Les;
        $post->judul = $request->judul;
        $post->jam = $request->jam;
        $post->deskripsi = $request->deskripsi;
        $post->pertemuan = $request->pertemuan;
        $post->harga = $request->harga;
        Auth::user()->les()->save($post);
        if ($post) {
            return redirect('guru/showLes')->with('alert', 'Data Les Berhasil ditambah');
        } else {
            return redirect('guru/showLes')->with('alert-danger', 'Data Les Gagal ditambah');
        }
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
}

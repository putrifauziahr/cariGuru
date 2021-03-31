<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\Transaksi;
use App\TransaksiDetail;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function pilihLes(Request $request, Les $les)
    {
        $trans = new Transaksi;
        $trans->id_murid = Auth::user()->id;
        $trans->id_les = $les->id_les;
        $trans->id_guru = $les->id_guru;
        $trans->harga = $les->harga;
        $trans->adm = 3000;
        $trans->total = $les->harga + $trans->adm;
        $trans->nama = Auth::user()->name;
        $trans->kontak = Auth::user()->kontak;
        $trans->alamat_belajar = Auth::user()->alamat;
        $trans->status = "Belum diajukan";
        $trans->save();

        return redirect('/murid/showPilihLes');
    }

    public function showPilihLes()
    {
        $user_id = Auth::user()->id;
        $trans = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('transaksis.id_murid', $user_id)
            ->orderBy('transaksis.id_trans', 'desc')
            ->paginate(3);
        return view('murid/content/les/showPilihLes', compact('trans'));
    }

    public function showDetailTempLes(Transaksi $trans)
    {
        $id = $trans->id_les;
        $idguru = $trans->id_guru;
        $less = Les::where('id_les', '=', $id)->get();
        $guru = User::where('id', '=', $idguru)->get();
        return view('murid/content/les/pilihLes', compact('trans', 'less', 'guru'));
    }

    public function showDetailLesLagi(Transaksi $trans)
    {
        $id = $trans->id_les;
        $idguru = $trans->id_guru;
        $less = Les::where('id_les', '=', $id)->get();
        $guru = User::where('id', '=', $idguru)->get();
        return view('murid/content/les/pilihLes2', compact('trans', 'less', 'guru'));
    }

    public function hapusTempLes(Transaksi $trans)
    {
        Transaksi::destroy($trans->id_trans);
        return back();
    }

    public function ubahTempLes(Request $request, $id_trans)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min  karakter ya !!!',
            'max' => ':attribute harus diisi maksimal :max karakter ya !!!',
        ];
        $this->validate($request, [
            'kebutuhan' => 'required',
            'tanggal_mulai' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'kontak' => 'required',
            'waktu' => 'required',
            'alamat_belajar' => 'required',

        ], $messages);

        if ($request->isMethod('post')) {

            $data = $request->all();

            Transaksi::where(['id_trans' => $id_trans])->update([
                'kebutuhan' => $data['kebutuhan'],
                'tanggal_mulai' => $data['tanggal_mulai'],
                'waktu' => $data['waktu'],
                'nama' => $data['nama'],
                'kelas' => $data['kelas'],
                'kontak' => $data['kontak'],
                'alamat_belajar' => $data['alamat_belajar'],
                'status' => "Menunggu Konfirmasi Guru"
            ]);
            return redirect('murid/showPilihLes');
        }
    }
}

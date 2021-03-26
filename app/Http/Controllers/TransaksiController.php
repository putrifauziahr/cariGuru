<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\Transaksi;
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
            ->get();
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
        if ($request->isMethod('post')) {

            $data = $request->all();

            Transaksi::where(['id_trans' => $id_trans])->update([
                'kebutuhan' => $data['kebutuhan'], 'tanggal_mulai' => $data['tanggal_mulai'],  'jam' => $data['jam'],
                'nama' => $data['nama'], 'kelas' => $data['kelas'],
                'kontak' => $data['kontak'], 'alamat' => $data['alamat'],
                'status' => $data['status'],
            ]);
            return redirect('murid/showPilihLes');
        }
    }
}

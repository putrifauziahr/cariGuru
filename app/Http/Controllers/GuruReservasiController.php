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

class GuruReservasiController extends Controller
{
    public function showReservasi()
    {
        $id_user = Auth::user()->id;
        $reserv = DB::table('transaksis')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->where('transaksis.id_guru', '=', $id_user)->get();
        return view('guru/content/reservasi/showReservasi', compact('reserv'));
    }

    public function detailReservasi(Transaksi $reserv)
    {
        return view('guru/content/reservasi/showDetail', compact('reserv'));
    }

    public function postUpdateReservasi(Request $request, $id_trans)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            Transaksi::where(['id_trans' => $id_trans])->update([
                'status' => $data['status'], 'alasan' => $data['alasan']
            ]);
            return redirect('guru/showReservasi')->with('alert', 'Status Berhasil Diubah');;
        }
    }
}

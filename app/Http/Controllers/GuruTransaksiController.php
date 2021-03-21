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

class GuruTransaksiController extends Controller
{
    public function showDataTrans()
    {
        $less = Les::all();
        $users = User::all();
        $user_id = Auth::user()->id;
        $user_id = Auth::user()->id;
        $data = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id')
            ->where('transaksidetails.id_guru', '=', $user_id)
            ->get();

        return view('guru/content/dataTrans/show', compact('les', 'users', 'trans', 'less', 'data'));
    }
}

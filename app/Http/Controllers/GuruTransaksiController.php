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

class GuruTransaksiController extends Controller
{
    public function showDataTrans()
    {
        $les = Auth::user()->les()->paginate(10);
        $less = Les::all();
        $user_id = Auth::user()->id;
        $users = User::find($user_id);
        $trans = DB::table('transaksis')->join('les', 'transaksis.id_les', '=',  'les.id_les')->get();
        $data = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->first();
        return view('guru/content/dataTrans/show', compact('les', 'users', 'trans', 'less', 'data'));
    }
}

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

class TransaksiDetailController extends Controller
{
    public function showPembayaran()
    {
        $tampil_bayar = Auth::user()->transaksidetails()->paginate(10);
        // $tampil = DB::table('transaksidetails')->join('users', 'transaksidetails.id_murid', '=', 'users.id')->get();
        return view('murid/content/bayar/show', compact('tampil_bayar'));
    }
    public function bayarLes(Request $request, $id)
    {
        $transs = Transaksi::where('id', $id)->first();
        $transDet = new TransaksiDetail;
        $transDet->id_trans = $transs->id;
        $transDet->id_murid = Auth::user()->id;
        $transDet->id_guru = $transs->id_guru;
        $transDet->save();

        return redirect('murid/showPembayaran');
    }
}

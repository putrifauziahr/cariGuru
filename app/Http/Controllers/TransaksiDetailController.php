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
        $user_id = Auth::user()->id;
        $detail = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksis.id_murid', '=', $user_id)
            ->get();
        return view('murid/content/bayar/show', compact('detail'));
    }
    public function bayarLes(Request $request, $id_trans)
    {
        $transDet = new TransaksiDetail;
        $transDet->id_trans = $id_trans;
        $transDet->status_detail = "Belum Melakukan Pembayaran";
        $transDet->save();

        return redirect('murid/showPembayaran');
    }

    public function showDetailBayar(TransaksiDetail $detail)
    {
        $id_det = $detail->id_trans;
        $detaill = DB::table('transaksis')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_trans', '=', $id_det)
            ->get();

        return view('murid/content/bayar/showDetail', compact('detaill'));
    }

    public function hapusDetailTrans(TransaksiDetail $detail)
    {
        TransaksiDetail::destroy($detail->id_detail);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use PDF;
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
use Throwable;

class TransaksiDetailController extends Controller
{
    public function showPembayaran()
    {
        $user_id = Auth::user()->id;
        $detail = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksis.id_murid', '=', $user_id)
            ->orderBy('id_detail', 'desc')
            ->paginate(2);
        return view('murid/content/bayar/show', compact('detail'));
    }
    public function bayarLes(Request $request, Transaksi $trans)
    {
        if ($request->isMethod('post')) {

            $data = $trans->id_trans;

            Transaksi::where(['id_trans' => $data])->update([
                'status' => "Berhasil"
            ]);
        }
        $check = TransaksiDetail::where('id_trans', $trans->id_trans)->where('id_guru', $trans->id_guru)->first();
        if (!$check) {
            $transDet = new TransaksiDetail;
            $transDet->id_trans = $trans->id_trans;
            $transDet->id_guru = $trans->id_guru;
            $transDet->status_detail = "Belum Melakukan Pembayaran";
            $transDet->save();
        }
        return redirect('murid/showPembayaran');
    }

    public function showDetailBayar(TransaksiDetail $detail)
    {
        $id_det = $detail->id_trans;
        $id_guru = $detail->id_guru;
        $id_user = Auth::user()->id;
        $detaill = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_murid', '=', $id_user)
            ->where('id_trans', '=', $id_det)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        return view('murid/content/bayar/showDetail', compact('detaill', 'detail', 'guru'));
    }

    public function showDetailBayarLagi(TransaksiDetail $detail)
    {
        $id_det = $detail->id_trans;
        $id_guru = $detail->id_guru;
        $id_user = Auth::user()->id;
        $detaill = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_murid', '=', $id_user)
            ->where('id_trans', '=', $id_det)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        return view('murid/content/bayar/showDetailLagi', compact('detaill', 'detail', 'guru'));
    }

    public function hapusDetailTrans(TransaksiDetail $detail)
    {
        TransaksiDetail::destroy($detail->id_detail);
        return back();
    }

    public function updateBayar(Request $request, $id_detail)
    {
        $request->validate([
            'status_detail' => 'required',
        ]);

        $update = [
            'status_detail' => $request->status_detail,
        ];


        if ($buktii = $request->file('bukti')) {
            $destinationPath = 'berkasBayar'; // upload path
            $nama_bukti = date('YmdHis') . "." . $buktii->getClientOriginalExtension();
            $buktii->move($destinationPath, $nama_bukti);
            $update['bukti'] = "$nama_bukti";
        }
        TransaksiDetail::where(['id_detail' => $id_detail])->update($update);
        return redirect('murid/showPembayaran');
    }

    public function makeExpired($id_detail)
    {
        try {
            TransaksiDetail::where('id_detail', $id_detail)->update([
                'status_detail' => 'kadaluwarsa'
            ]);

            $success['status'] = '1';
            // $success['html'] = $html;
            $success['message'] = 'Waktu kirim bukti transfer telah habis';
            return response()->json($success, 200);
        } catch (Throwable $e) {
            $success['status'] = '0';
            // $success['html'] = $html;
            $success['message'] = $e;
            return response()->json($success, 500);
        }
    }


    public function cetak_nota(TransaksiDetail $detail)
    {
        $id_det = $detail->id_trans;
        $id_guru = $detail->id_guru;
        $id_user = Auth::user()->id;
        $detaill = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_murid', '=', $id_user)
            ->where('id_trans', '=', $id_det)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        $pdf = PDF::loadview('murid/content/bayar/notabayar', compact('detail', 'detaill', 'guru'));
        return $pdf->stream();
    }
}

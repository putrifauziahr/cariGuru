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
        $data = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksidetails.id_guru', '=', $user_id)
            ->get();
        $income = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksidetails.id_guru', '=', $user_id)
            ->where('status_bukti', '=', 'Sukses')
            ->sum('transaksis.harga');
        return view('guru/content/dataTrans/show', compact('les', 'users', 'trans', 'less', 'data', 'income'));
    }

    public function showDetailTrans(TransaksiDetail $data)
    {
        $id_trans = $data->id_trans;
        $user_id = Auth::user()->id;
        $data2 = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('transaksis.id_trans', '=', $id_trans)
            ->where('transaksis.id_guru', '=', $user_id)
            ->get();
        return view('guru/content/dataTrans/showDetail', compact('data', 'data2'));
    }

    public function updateDataTrans(Request $request, TransaksiDetail $data)
    {
        $id_detail = $data->id_detail;
        if ($request->isMethod('post')) {

            $data = $request->all();

            TransaksiDetail::where(['id_detail' => $id_detail])->update([
                'status_bukti' => $data['status_bukti']
            ]);
            return redirect('guru/showDataTrans')->with('alert', 'Status Berhasil Diubah');
        }
    }
}

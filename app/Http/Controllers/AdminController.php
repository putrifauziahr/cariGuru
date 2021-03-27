<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\User;
use App\Les;
use App\SubjekLes;
use App\TingkatLes;
use App\Transaksi;
use App\TransaksiDetail;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class AdminController extends Controller
{
    public function dashboard_admin()
    {
        $murid = User::where('role', '=', "murid")->count();
        $guru = User::where('role', '=', "guru")->count();
        $trans = TransaksiDetail::where('status_detail', '=', "Berhasil")->count();
        return view('admin/content/dashboard', compact('murid', 'guru', 'trans'));
    }

    //========================================================//
    public function showDataGuru()
    {
        $guru = DB::table('users')
            ->where('role', '=', 'guru')->get();
        return view('admin/content/guru/showDataGuru', compact('guru'));
    }

    public function showDetailGuru(User $guru)
    {
        $id = $guru->id;
        $subjek = SubjekLes::where('id_guru', $id)->get();
        $tingkat = TingkatLes::where('id_guru', $id)->get();
        $les = Les::where('id_guru', $id)->get();
        return view('admin/content/guru/showDetailGuru', compact('guru', 'subjek', 'tingkat', 'les'));
    }

    public function hapusDataGuru(User $guru)
    {

        User::destroy($guru->id);
        return redirect('admin/showDataGuru');
    }
    //========================================================//

    public function showDataMurid()
    {
        $murid = DB::table('users')
            ->where('role', '=', 'murid')->get();
        return view('admin/content/murid/showDataMurid', compact('murid'));
    }

    public function hapusDataMurid(User $murid)
    {

        User::destroy($murid->id);
        return redirect('admin/showDataMurid');
    }

    //========================================================//

    public function showDataTrans()
    {
        $trans = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('status_detail', '=', "Menunggu Konfirmasi Admin")
            ->orderBy('transaksidetails.id_detail', 'desc')
            ->get();
        return view('admin/content/transaksi/showDataTrans', compact('trans'));
    }

    public function showDetailTrans(TransaksiDetail $trans)
    {
        $id_trans = $trans->id_trans;
        $id_guru = $trans->id_guru;
        $transs = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_trans', '=', $id_trans)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        return view('admin/content/transaksi/showDetailTrans', compact('transs', 'trans', 'guru'));
    }

    public function updateDetailTrans(Request $request, $id_detail)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            TransaksiDetail::where(['id_detail' => $id_detail])->update([
                'status_detail' => $data['status_detail']
            ]);
            return redirect('admin/showDataTrans')->with('alert', 'Status Berhasil diperbarui');;
        }
    }


    public function showDataReservasi()
    {
        $id = User::where('role', '=', 'guru')->get();
        $reserv = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->orderBy('transaksis.id_trans', 'desc')
            ->get();
        return view('admin/content/transaksi/showDataReservasi', compact('reserv'));
    }

    public function showDataTransaksi()
    {
        $dataLes = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('status_detail', '=', "Berhasil")
            ->orderBy('transaksis.id_trans', 'desc')
            ->get();
        return view('admin/content/transaksi/showTrans', compact('dataLes'));
    }

    //==============================================================//
    public function showDataLes()
    {
        $dataLes = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('status_detail', '=', "Berhasil")
            ->orderBy('transaksis.id_trans', 'desc')
            ->get();
        return view('admin/content/les/show', compact('dataLes'));
    }

    public function showDetailLes(TransaksiDetail $dataLes)
    {
        $id_trans = $dataLes->id_trans;
        $id_guru = $dataLes->id_guru;
        $transs = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_trans', '=', $id_trans)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        $subjek = SubjekLes::where('id_guru', '=', $id_guru)->get();
        return view('admin/content/les/showDetail', compact('transs', 'dataLes', 'guru', 'subjek'));
    }

    public function postUpdateDataLes(Request $request, TransaksiDetail $dataLes)
    {
        $id_detail = $dataLes->id_detail;
        $request->validate([
            'status_bukti' => 'required',
        ]);

        $update = [
            'status_bukti' => $request->status_bukti,
        ];


        if ($buktilagii = $request->file('buktilagi')) {
            $destinationPath = 'berkasTransfer'; // upload path
            $nama_bukti = date('YmdHis') . "." . $buktilagii->getClientOriginalExtension();
            $buktilagii->move($destinationPath, $nama_bukti);
            $update['buktilagi'] = "$nama_bukti";
        }
        TransaksiDetail::where(['id_detail' => $id_detail])->update($update);
        return redirect('admin/showDataLes')->with('alert', 'Status Berhasil Diperbarui');
    }
}

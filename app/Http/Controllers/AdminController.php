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
        return view('admin/content/dashboard');
    }
    //=======================================================//
    public function showProfil($id_admin)
    {
        $admin = DB::table('admins')->where('id_admin', '=', $id_admin)->get();
        return view('admin/content/showProfil', compact('admin'));
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
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id')
            ->join('users', 'transaksidetails.id_murid', '=', 'users.id')
            ->orderBy('transaksidetails.id_detail', 'desc')
            ->get();
        return view('admin/content/transaksi/showDataTrans', compact('trans'));
    }
}

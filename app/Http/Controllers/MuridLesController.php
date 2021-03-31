<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use Auth;
use App\Biodata;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\Les;
use App\SubjekLes;
use App\TingkatLes;
use App\TransaksiDetail;

class MuridLesController extends Controller
{
    public function showDetailLes(Les $les)
    {
        // $less = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        // $les = Les::all();
        // $users = User::all();
        return view('murid/content/dashboard/detailLes', compact('les', 'users'));
    }

    public function showDetailGuru(User $guru)
    {
        $id = $guru->id;
        $subjek = SubjekLes::where('id_guru', $id)->get();
        $tingkat = TingkatLes::where('id_guru', $id)->get();
        $les = Les::where('id_guru', $id)->get();
        return view('murid/content/dashboard/detailGuru', compact('les', 'guru', 'subjek', 'tingkat'));
    }

    public function showDataLes()
    {
        $id_murid = Auth::user()->id;
        $les = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksis.id_murid', '=', $id_murid)
            ->where('status_detail', '=', 'berhasil')
            ->orderBy('tanggal_mulai', 'asc')
            ->paginate(10);
        $less = Les::all();
        return view('murid/content/les/showLes', compact('les', 'less'));
    }

    public function showDetailData(TransaksiDetail $les)
    {
        $id_trans = $les->id_trans;
        $id_guru = $les->id_guru;
        $transs = DB::table('transaksis')
            ->join('users', 'transaksis.id_murid', '=', 'users.id')
            ->join('les', 'transaksis.id_les', '=', 'les.id_les')
            ->where('id_trans', '=', $id_trans)
            ->get();
        $guru = User::where('id', '=', $id_guru)->get();
        $subjek = SubjekLes::where('id_guru', '=', $id_guru)->get();
        return view('murid/content/les/showDetail', compact('les', 'transs', 'subjek', 'guru'));
    }

    public function postUpdateDataLes(Request $request, $id_detail)
    {
        $request->validate([
            'status_belajar' => 'required',
        ]);

        $update = [
            'status_belajar' => $request->status_belajar,
        ];
        TransaksiDetail::where(['id_detail' => $id_detail])->update($update);
        return redirect('murid/showDataLes');
    }
}

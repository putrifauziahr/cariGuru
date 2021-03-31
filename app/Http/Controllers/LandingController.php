<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use App\Http\Controllers\Controller;


class LandingController extends Controller
{
    public function index()
    {

        $guru = User::where('role', '=', 'guru')->paginate(20);
        $les = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        return view('landing/content/index', compact('guru', 'les'));
    }

    public function cariguru()
    {
        $guru = User::where('role', '=', 'guru')->get();
        $les = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        return view('landing/content/cariguru', compact('les', 'guru'));
    }

    public function informasi()
    {

        return view('landing/content/informasi');
    }

    public function cari_Guru(Request $request)
    {

        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $subjek = DB::table('subjek_les')
            ->where('subjek', 'like', "%" . $cari . "%")
            ->paginate();

        $sub = DB::table('subjek_les')->join('users', 'subjek_les.id_guru', '=', 'users.id')
            ->where('subjek_les.subjek', '=', $subjek)
            ->get();

        // mengirim data pegawai ke view index
        return view('landing/content/cariguru', compact(''));
    }
}

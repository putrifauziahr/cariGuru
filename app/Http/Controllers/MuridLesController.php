<?php

namespace App\Http\Controllers;

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

class MuridLesController extends Controller
{
    public function showDetailLes(Les $les)
    {
        // $less = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        // $les = Les::all();
        // $users = User::all();
        return view('murid/content/dashboard/detailLes', compact('les', 'users'));
    }

    public function showDetailGuru(Les $les)
    {
        $guru_id = $les->id_guru;
        $subjek = SubjekLes::where('id_guru', '=', $guru_id)->get();
        $tingkat = TingkatLes::where('id_guru', '=', $guru_id)->get();
        $users = User::all();
        $guru = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        return view('murid/content/dashboard/detailGuru', compact('les', 'users', 'guru', 'subjek', 'tingkat'));
    }
}

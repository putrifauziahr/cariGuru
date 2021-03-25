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

    public function showDetailGuru(User $guru)
    {
        $id = $guru->id;
        $subjek = SubjekLes::where('id_guru', $id)->get();
        $tingkat = TingkatLes::where('id_guru', $id)->get();
        $les = Les::where('id_guru', $id)->get();
        return view('murid/content/dashboard/detailGuru', compact('les', 'guru', 'subjek', 'tingkat'));
    }
}

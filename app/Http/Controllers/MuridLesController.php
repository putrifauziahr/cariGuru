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
        $users = User::all();
        $bio = Biodata::all();
        $lesLagi = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->first();
        $guru = DB::table('biodatas')->join('users', 'biodatas.id_user', '=', 'users.id')->first();
        return view('murid/content/dashboard/detailGuru', compact('les', 'lesLagi', 'users', 'guru', 'bio'));
    }
}

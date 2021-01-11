<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    public function dashboard_guru()
    {
        return view('guru.profil.dashboard');
    }

    public function profil_guru()
    {
        $users = \App\User::where('id', Auth::user()->id)->first();
        return view('guru.profil.profil', compact('users'));
    }

    public function rating_guru()
    {
        return view('guru/rating');
    }

    public function jadwal_guru()
    {
        return view('guru/jadwal/index');
    }

    public function murid_les()
    {
        return view('guru/murid/data_murid');
    }
}

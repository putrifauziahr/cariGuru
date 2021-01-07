<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function dashboard_guru()
    {
        return view('guru/dashboard');
    }

    public function profil_guru()
    {
        return view('guru/profil');
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

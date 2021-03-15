<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'guru') { // Role Guru
            return redirect()->route('guru/dashboard_guru')->with('alert-success', 'Selamat Anda Berhasil Daftar dan Login! ');
        } elseif (Auth::user()->role == 'murid') { // Role Murid
            return redirect()->route('murid/dashboard_murid')->with('alert-success', 'Selamat Anda Berhasil Daftar dan Login! ');
        }
    }
}

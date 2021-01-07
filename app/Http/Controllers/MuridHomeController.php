<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridHomeController extends Controller
{
    public function home()
    {
        return view('murid.umum.home');
    }

    public function guru()
    {
        return view('murid.umum.guru');
    }
}

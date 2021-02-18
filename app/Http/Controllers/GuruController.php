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
        return view('guru/content/index');
    }

    public function rating_guru()
    {
        return view('guru/content/rating');
    }
}

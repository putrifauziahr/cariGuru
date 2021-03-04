<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('murid.auth.login');
    }

    public function getRegister()
    {
        return view('murid.auth.register');
    }

    public function logout()
    {
        return view('murid.auth.register');
    }
}

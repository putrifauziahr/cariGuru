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
        $les = Les::all();
        $users = User::all();
        return view('landing/content/index', compact('les', 'users'));
    }
}

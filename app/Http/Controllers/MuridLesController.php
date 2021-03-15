<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\Biodatas;
use App\Les;

class MuridLesController extends Controller
{
    public function showDetailLes(Les $les)
    {
        $less = DB::table('les')->join('users', 'les.id_guru', '=', 'users.id')->get();
        return view('murid/content/detailLes', compact('les', 'less'));
    }
}

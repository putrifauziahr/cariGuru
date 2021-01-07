<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_admin()
    {
        return view('admin/dashboard');
    }

    public function data_guru()
    {
        return view('admin/guru/index');
    }


    public function data_les()
    {
        return view('admin/les/index');
    }


    public function data_murid()
    {
        return view('admin/murid/index');
    }

    public function data_admin()
    {
        return view('admin/data_admin');
    }
}

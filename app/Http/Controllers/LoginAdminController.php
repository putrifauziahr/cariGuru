<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{
    public function login()
    {
        return view('admin.content.login');
    }

    public function loginPost(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $data = Admin::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('nama', $data->name);
                Session::put('id_admin', $data->id_admin);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('dashboard_admin');
            } else {
                return redirect('login/admin')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login/admin')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function register(Request $request)
    {
        return view('admin.content.register');
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new Admin();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login/admin')->with('alert-success', 'Kamu berhasil Register');
    }
}

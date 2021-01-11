<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;

        // $data = User::where('email', $email)->first();
        // if ($data) { //apakah email tersebut ada atau tidak
        //     if (Hash::check($password, $data->password)) {
        //         Session::put('name', $data->name);
        //         Session::put('email', $data->email);
        //         Session::put('login', TRUE);
        //         return redirect('dashboard_guru');
        //     } else {
        //         return redirect('login')->with('alert', 'Password atau Email, Salah !');
        //     }
        // } else {
        //     return redirect('login')->with('alert', 'Password atau Email, Salah!');
        // }
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'admin') {
                return redirect('dashboard_admin');
            } elseif (auth()->user()->role == 'guru') {
                return redirect('dashboard_guru');
            }
            if (auth()->user()->role == 'murid') {
                return redirect('dashboard_murid');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('login')
            ->withSuccess('Terimakasih, selamat datang kembali!');
    }
}

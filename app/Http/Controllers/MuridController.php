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

class MuridController extends Controller
{
    public function dashboard_murid()
    {

        $guru = User::where('role', '=', 'guru')->get();
        $les = Les::all();
        return view('murid/content/dashboard/dashboard', compact('les', 'guru'));
    }

    /////////////////PROFIL//////////////////
    public function profil_murid()
    {
        return view('murid/content/profil');
    }

    //proses edit atau update profil Murid
    public function updateprofil(Request $request)
    {

        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        if ($request->isMethod('post')) {

            $data = $request->all();

            User::where(['id' => $user_id])->update([
                'name' => $data['name'], 'email' => $data['email'], 'password' => bcrypt($data['password']), 'kontak' => $data['kontak'], 'alamat' => $data['alamat'],
            ]);
            return redirect('murid/profil_murid')->with('status', 'Profil Berhasil diperbarui');
        }
    }

    //proses edit atau update foto profil Murid
    public function updateFotoProfil(Request $request)
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        if ($imagee = $request->file('image')) {
            $destinationPath = 'fotoProfilMurid'; // upload path
            $nama_image = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $nama_image);
            $update['image'] = "$nama_image";
        }
        User::where(['id' => $user_id])->update($update);
        return redirect('murid/profil_murid')->with('status', 'Profil Berhasil diperbarui');
    }
}

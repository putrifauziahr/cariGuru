<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    public function dashboard_guru()
    {
        $user_id = Auth::user()->id;
        $income = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksidetails.id_guru', '=', $user_id)
            ->where('status_bukti', '=', 'Sukses')
            ->sum('transaksis.harga');
        $les = DB::table('transaksidetails')
            ->join('transaksis', 'transaksidetails.id_trans', '=', 'transaksis.id_trans')
            ->where('transaksidetails.id_guru', '=', $user_id)
            ->where('status_detail', '=', 'Berhasil')
            ->count();
        return view('guru/content/index', compact('income', 'les'));
    }

    //////////////////PROFIL/////////////////
    public function profil_guru()
    {
        $guru = User::get();
        $guru = \App\User::where('id', Auth::user()->id)->first();
        return view('guru/content/profil', compact('guru'));
    }

    //proses edit atau update profil guru
    public function updateprofil(Request $request)
    {

        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        if ($request->isMethod('post')) {

            $data = $request->all();

            User::where(['id' => $user_id])->update([
                'name' => $data['name'], 'email' => $data['email'], 'password' => bcrypt($data['password']), 'alamat' => $data['alamat'], 'kontak' => $data['kontak'],
                'pekerjaan' => $data['pekerjaan'], 'keahlian' => $data['keahlian'], 'pengalaman' => $data['pengalaman'],
                'sekolah' => $data['sekolah'], 'deskripsi' => $data['deskripsi'],
            ]);
            return redirect('guru/profil_guru')->with('alert', 'Profil Berhasil diperbarui');
        }
    }

    public function updateFotoProfil(Request $request)
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        if ($imagee = $request->file('image')) {
            $destinationPath = 'fotoProfil'; // upload path
            $nama_image = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $nama_image);
            $update['image'] = "$nama_image";
        }
        User::where(['id' => $user_id])->update($update);
        return redirect('guru/profil_guru')->with('alert', 'Foto Profil Berhasil diperbarui');
    }

    public function updateBerkasProfil(Request $request)
    {
        $user_id = Auth::user()->id;
        $users = User::find($user_id);

        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,doc,pdf,docx,zip|max:10000',
        ]);

        if ($filee = $request->file('file')) {
            $destinationPath = 'berkasBiodata'; // upload path
            $nama_file = date('YmdHis') . "." . $filee->getClientOriginalExtension();
            $filee->move($destinationPath, $nama_file);
            $update['file'] = "$nama_file";
        }

        User::where(['id' => $user_id])->update($update);
        return redirect('guru/profil_guru')->with('alert', 'Foto Profil Berhasil diperbarui');
    }



    ////////////////////////BIODATA///////////////////////////    
    public function biodata()
    {
        $tampilkan_data = Auth::user()->biodatas()->paginate(10);
        return view('guru/content/biodata/show', compact('tampilkan_data'));
    }

    public function showBiodata()
    {
        $tampilkan_data = Auth::user()->biodatas()->paginate(10);
        return view('guru/content/biodata/showBio', compact('tampilkan_data'));
    }

    public function createBiodata()
    {
        return view('guru.content.biodata.create');
    }

    public function postCreateBiodata(Request $request)
    {

        $request->validate([
            'pekerjaan' => 'required',
            'keahlian' => 'required',
            'pengalaman' => 'required',
            'sekolah' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg,doc,pdf,docx,zip|max:10000',
        ]);

        // menyimpan data file yang diupload ke variabel $gambar
        $image = $request->file('image');
        $nama_image = time() . "_" . $image->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $destinationPath = 'berkasBiodata';
        $image->move($destinationPath, $nama_image);


        $post = new Biodata;
        $post->pekerjaan = $request->pekerjaan;
        $post->keahlian = $request->keahlian;
        $post->pengalaman = $request->pengalaman;
        $post->sekolah = $request->sekolah;
        $post->deskripsi = $request->deskripsi;
        $post->image = $nama_image;
        Auth::user()->biodatas()->save($post);
        return redirect('guru/showBiodata')->with('alert', 'Biodata Berhasil ditambahkan');
    }


    public function editBiodata(Request $request)
    {
        $request->validate([
            'pekerjaan' => 'required',
            'keahlian' => 'required',
            'pengalaman' => 'required',
            'sekolah' => 'required',
            'deskripsi' => 'required',
        ]);

        $update = [
            'pekerjaan' => $request->pekerjaan,
            'keahlian' => $request->keahlian,
            'pengalaman' => $request->pengalaman,
            'sekolah' => $request->sekolah,
            'deskripsi' => $request->deskripsi,
        ];


        if ($imagee = $request->file('image')) {
            $destinationPath = 'berkasBiodata'; // upload path
            $nama_image = date('YmdHis') . "." . $imagee->getClientOriginalExtension();
            $imagee->move($destinationPath, $nama_image);
            $update['image'] = "$nama_image";
        }

        $update['pekerjaan'] = $request->get('pekerjaan');
        $update['keahlian'] = $request->get('keahlian');
        $update['pengalaman'] = $request->get('pengalaman');
        $update['sekolah'] = $request->get('sekolah');
        $update['deskripsi'] = $request->get('deskripsi');

        Auth::user()->biodatas()->update($update);
        return redirect('guru/showBiodata')->with('alert', 'Biodata Berhasil diperbarui');
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LesController extends Controller
{
    public function showLes()
    {
        $tampilkan_data = Auth::user()->les()->paginate(10);
        return view('guru/content/les/show', compact('tampilkan_data'));
    }

    public function showDetailLes(Les $tampilkan_data)
    {
        return view('guru/content/les/showDetail', compact('tampilkan_data'));
    }

    public function tambahLes()
    {
        return view('guru/content/les/tambah');
    }

    public function postTambahLes(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'sasaran' => 'required',
            'kelas' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'pertemuan' => 'required',
            'harga' => 'required',
            'file' => 'required|file|mimes:jpeg,png,jpg,doc,pdf,docx,zip|max:10000',
        ]);

        // menyimpan data file yang diupload ke variabel $gambar
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $destinationPath = 'berkasLes';
        $file->move($destinationPath, $nama_file);


        $post = new Les;
        $post->judul = $request->judul;
        $post->hari = $request->hari;
        $post->jam = $request->jam;
        $post->sasaran = $request->sasaran;
        $post->kelas = $request->kelas;
        $post->deskripsi = $request->deskripsi;
        $post->tanggal_mulai = $request->tanggal_mulai;
        $post->tanggal_selesai = $request->tanggal_selesai;
        $post->pertemuan = $request->pertemuan;
        $post->harga = $request->harga;
        $post->file = $nama_file;
        Auth::user()->les()->save($post);
        return redirect('guru/showLes')->with('alert', 'Data Les Berhasil ditambah');
    }

    public function postUpdateLes(Request $request, $id_les)
    {
        $request->validate([
            'judul' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'sasaran' => 'required',
            'kelas' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'pertemuan' => 'required',
            'harga' => 'required',
        ]);

        $update = [
            'judul' => $request->judul,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'sasaran' => $request->sasaran,
            'kelas' => $request->kelas,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'pertemuan' => $request->pertemuan,
            'harga' => $request->harga,
        ];


        if ($filee = $request->file('file')) {
            $destinationPath = 'berkasLes'; // upload path
            $nama_file = date('YmdHis') . "." . $filee->getClientOriginalExtension();
            $filee->move($destinationPath, $nama_file);
            $update['file'] = "$nama_file";
        }

        $update['judul'] = $request->get('judul');
        $update['hari'] = $request->get('hari');
        $update['jam'] = $request->get('jam');
        $update['sasaran'] = $request->get('sasaran');
        $update['kelas'] = $request->get('kelas');
        $update['deskripsi'] = $request->get('deskripsi');
        $update['tanggal_mulai'] = $request->get('tanggal_mulai');
        $update['tanggal_selesai'] = $request->get('tanggal_selesai');
        $update['pertemuan'] = $request->get('pertemuan');
        $update['harga'] = $request->get('harga');

        // Auth::user()->les($id_les)->update($update);
        Les::where('id_les', $id_les)->update($update);
        return redirect('guru/showLes')->with('alert', 'Data Les Berhasil diperbarui');
    }

    public function hapusLes(Les $tampilkan_data)
    {
        Les::destroy($tampilkan_data->id_les);
        return redirect('guru/showLes')->with('alert', 'Les Berhasil Dihapus!');
    }
}

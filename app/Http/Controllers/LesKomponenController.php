<?php

namespace App\Http\Controllers;

use App\Biodata;
use App\JenisLes;
use App\TingkatLes;
use App\SubjekLes;
use App\TarifLes;
use Auth;
use App\User;
use App\Les;
use App\Transaksi;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LesKomponenController extends Controller
{
    public function showSubjekLes()
    {
        $user_id = Auth::user()->id;
        $subjek = SubjekLes::where('id_guru', Auth::user()->id)->get();
        return view('guru/content/les/showTingkat', compact('subjek'));
    }

    public function tambahSubjekLes(Request $request)
    {
        $post = new SubjekLes();
        $post->subjek = $request->subjek;
        Auth::user()->subjekles()->save($post);

        return redirect('guru/showTingkatLes')->with('alert', 'Data Jenis Les Berhasil ditambah');
    }

    public function hapusSubjekLes(SubjekLes $subjek)
    {
        SubjekLes::destroy($subjek->id_subjek);
        return redirect('guru/showTingkatLes');
    }

    //======================================================================//
    public function showTingkatLes()
    {
        $tingkat = TingkatLes::where('id_guru', Auth::user()->id)->get();
        $subjek = SubjekLes::where('id_guru', Auth::user()->id)->get();
        return view('guru/content/les/showTingkat', compact('tingkat', 'subjek'));
    }

    public function tambahTingkatLes(Request $request)
    {

        $post = new TingkatLes();
        $post->tingkat = $request->tingkat;
        Auth::user()->tingkatles()->save($post);

        return redirect('guru/showTingkatLes')->with('alert', 'Data Jenis Les Berhasil ditambah');
    }

    public function hapusTingkatLes(TingkatLes $tingkat)
    {
        TingkatLes::destroy($tingkat->id_tingkat);
        return redirect('guru/showTingkatLes');
    }
}

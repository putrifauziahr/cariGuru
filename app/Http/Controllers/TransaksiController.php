<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Les;
use App\Transaksi;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function pilihLes(Request $request, $id_les)
    {
        $les = Les::where('id_les', $id_les)->first();
        $trans = new Transaksi;
        $trans->id_murid = Auth::user()->id;
        $trans->id_les = $les->id_les;
        $trans->harga = $les->harga;
        $trans->qty = 1;
        $trans->subtotal = $les->harga;
        $trans->save();

        $less = Les::all();
        $transs = Transaksi::where('id_les', $id_les)->first();
        return view('murid/content/les/pilihLes', compact('les', 'transs', 'less'));
    }

    public function hapusTempLes(Transaksi $transs)
    {
        Transaksi::destroy($transs->id);
        return redirect('murid/dashboard_murid');
    }

    public function ubahTempLes(Request $request, $id)
    {
        if ($request->isMethod('post')) {

            $data = $request->all();

            Transaksi::where(['id' => $id])->update([
                'qty' => $data['qty'],
            ]);
            return redirect()->route('murid/pilihLes');
        }
    }
}

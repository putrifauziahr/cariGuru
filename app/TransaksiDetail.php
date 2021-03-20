<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    protected $fillable = ['id_trans', 'id_murid', 'id_guru'];
    protected $table = "transaksidetails";
    protected $primaryKey = "id_detail";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_murid');
    }

    public function transaksis()
    {
        return $this->belongsTo('\App\Transaksi', 'id_trans');
    }
}

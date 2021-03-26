<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    protected $fillable = ['id_trans'];
    protected $table = "transaksidetails";
    protected $primaryKey = "id_detail";

    public function transaksis()
    {
        return $this->belongsTo('\App\Transaksi', 'id_trans');
    }
}

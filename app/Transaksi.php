<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_murid', 'id_les'];
    protected $table = "transaksis";
    protected $primaryKey = "id";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_murid');
    }

    public function less()
    {
        return $this->belongsTo('\App\Les', 'id_les');
    }
}

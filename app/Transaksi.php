<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_murid', 'id_les', 'id_guru'];
    protected $table = "transaksis";
    protected $primaryKey = "id";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_murid');
    }

    public function les()
    {
        return $this->belongsTo('\App\Les', 'id_les');
    }

    public function transaksidetails()
    {
        return $this->hasMany('App\TransaksiDetail', 'id_trans');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Les extends Model
{
    protected $fillable = ['id_guru', 'judul', 'jam', 'deskripsi', 'pertemuan', 'harga'];
    protected $table = "les";
    protected $primaryKey = "id_les";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_guru');
    }

    public function transaksis()
    {
        return $this->hasMany('App\Transaksi', 'id_les');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Les extends Model
{
    protected $fillable = ['id_guru', 'judul', 'hari', 'jam', 'sasaran', 'deskripsi', 'tanggal_mulai', 'harga', 'file'];
    protected $table = "les";
    protected $primaryKey = "id_les";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_guru');
    }
}

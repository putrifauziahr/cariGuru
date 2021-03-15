<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['id_user', 'pekerjaan', 'keahlian', 'pengalaman', 'sekolah', 'deskripsi', 'image'];
    protected $table = "biodatas";
    protected $primaryKey = "id_biodata";

    public function users()
    {
        return $this->belongsTo('\App\User');
    }
}

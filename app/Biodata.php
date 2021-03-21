<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = ['id_user', 'id_user', 'id_tingkat', 'id_tarif', 'id_subjek'];
    protected $table = "biodatas";
    protected $primaryKey = "id_biodata";

    public function users()
    {
        return $this->belongsTo('\App\User', 'id_user');
    }
}

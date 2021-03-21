<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatLes extends Model
{
    protected $fillable = ['id_tingkat', 'id_guru', 'tingkat'];
    protected $table = "tingkatan";
    protected $primaryKey = "id_tingkat";

    public function users()
    {
        return $this->belongsTo('App\User', 'id_guru');
    }

    public function les()
    {
        return $this->hasMany('App\Les', 'id_tingkat');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjekLes extends Model
{
    protected $fillable = ['id_subjek', 'id_guru', 'subjek'];
    protected $table = "subjek_les";
    protected $primaryKey = "id_subjek";

    public function users()
    {
        return $this->belongsTo('App\User', 'id_guru');
    }

    public function les()
    {
        return $this->hasMany('App\Les', 'id_subjek');
    }
}

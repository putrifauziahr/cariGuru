<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function biodatas()
    {
        return $this->hasMany('App\Biodata', 'id_user');
    }

    public function les()
    {
        return $this->hasMany('App\Les', 'id_guru');
    }

    public function transaksis()
    {
        return $this->hasMany('App\Transaksi', 'id_murid');
    }

    public function transaksidetails()
    {
        return $this->hasMany('App\TransaksiDetail', 'id_murid');
    }

    public function tingkatles()
    {
        return $this->hasMany('App\TingkatLes', 'id_guru');
    }

    public function subjekles()
    {
        return $this->hasMany('App\SubjekLes', 'id_guru');
    }
}

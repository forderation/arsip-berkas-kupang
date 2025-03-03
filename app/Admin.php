<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    protected $guard = 'admin';
    protected $table = 'admin';
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = [
        'nama_admin',
        'email',
        'nomor_pegawai',
        'jenis_kelamin'
    ];

    public function get_nama(){
        return $this->nama_admin;
    }
}

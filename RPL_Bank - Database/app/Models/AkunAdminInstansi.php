<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunAdminInstansi extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin_instansi';
    protected $table = 'akun_admin_instansi';
    protected $fillable = [
        'no_telp',
        'email',
        'username_instansi',
        'password_instansi'
    ];

    // Jika ingin menyesuaikan nama kolom password
    public function getAuthPassword()
    {
        return $this->password_instansi;
    }

    protected $hidden = [
        'password_instansi',
    ];
}

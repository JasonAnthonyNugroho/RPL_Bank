<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AkunAdminBank extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin_bank';
    protected $table = 'akun_admin_bank';
    protected $fillable = ['username_admin', 'password_admin'];

    // Jika ingin menyesuaikan nama kolom password
    public function getAuthPassword()
    {
        return $this->password_admin;
    }

    protected $hidden = [
        'password_admin',
    ];
}

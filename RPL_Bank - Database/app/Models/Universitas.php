<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'universitas';
    protected $fillable = [
        'nama_univ',
        'alamat_univ',
        'telp_univ',
        'jenis_univ',
        'email_univ'
    ];

    public function setting_harga()
    {
        return $this->hasOne(Post::class, 'id_univ', 'id');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Post::class, 'id_univ', 'id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'mahasiswa';
    public $timestamps = false;
    protected $fillable = [
        'nim',
        'nama_mhs',
        'alamat_mhs',
        'gender_mhs',
        'email_mhs',
        'no_telp_mhs',
        'id_univ'
    ];

    public function tagihan()
    {
        return $this->hasMany(Post::class, 'nim', 'nim');
    }
    public function universitas()
    {
        return $this->belongsTo(Universitas::class, 'id_univ', 'id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = 'tagihan';
    protected $fillable = [
        'nim',
        'id_set_hrg',
        'sks',
        'total_hrg'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'nim', 'nim');
    }

    public function setting_harga()
    {
        return $this->belongsTo(User::class, 'id_set_hrg', 'id');
    }

    public function tagihan()
    {
        return $this->hasMany(Post::class, 'id_tgh', 'id');
    }

    public function invoice()
    {
        return $this->hasOne(Post::class, 'id_tgh', 'id');
    }
}

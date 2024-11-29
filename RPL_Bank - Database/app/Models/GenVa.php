<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenVa extends Model
{
    use HasFactory;

    protected $table = 'gen_va';
    protected $fillable = [
        'id_tgh',
        'no_va'
    ];

    public function tagihan()
    {
        return $this->belongsTo(User::class, 'id_tgh', 'id');
    }

    public function transaksi()
    {
        return $this->hasMany(Post::class, 'id_gen_va', 'id');
    }
}

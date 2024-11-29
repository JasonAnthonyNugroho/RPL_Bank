<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';
    protected $fillable = [
        'id_tgh',
        'tgl'
    ];

    public function tagihan()
    {
        return $this->belongsTo(User::class, 'id_tgh', 'id');
    }


}

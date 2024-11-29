<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingHarga extends Model
{
    use HasFactory;

    protected $table = 'setting_harga';
    public $timestamps = false;
    protected $fillable = [
        'id_univ',
        'spp',
        'kesehatan',
        'fasilitas',
        'hrg_sks'
    ];

    public function universitas()
    {
        return $this->belongsTo(User::class, 'id_univ', 'id');
    }

    public function tagihan()
    {
        return $this->hasMany(User::class, 'id_set_hrg', 'id');
    }
}
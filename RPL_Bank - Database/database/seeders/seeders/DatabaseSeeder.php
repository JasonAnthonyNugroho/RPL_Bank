<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AkunAdminBank;
use App\Models\AkunAdminInstansi;
use App\Models\Universitas;
use App\Models\SettingHarga;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Universitas::create([
        //     'nama_univ' => 'UKDW',
        //     'alamat_univ' => 'Jl.Dagen',
        //     'telp_univ' => '08826832743279',
        //     'jenis_univ' => '08826832743279',
        //     'email_univ' => '08826832743279',
        // ]);

        // AkunAdminBank::create([
        //     'username_admin' => 'admin2',
        //     'password_admin' => Hash::make('12345678'),
        // ]);

        // AkunAdminInstansi::create([
        //     'no_telp' => '081534567231',
        //     'email' => 'univ@gmail.com',
        //     'username_instansi' => 'admin1',
        //     'password_instansi' => Hash::make('12345675'),
        // ]);

        SettingHarga::create([
            'id_univ' => '1',
            'spp' => '0',
            'kesehatan' => '0',
            'fasilitas' => '0',
            'hrg_sks' => '0',
        ]);
    }
}

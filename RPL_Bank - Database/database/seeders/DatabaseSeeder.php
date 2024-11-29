<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AkunAdminBank;
use App\Models\AkunAdminInstansi;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan admin dengan password yang di-hash menggunakan bcrypt
        AkunAdminBank::create([
            'username_admin' => 'admin2',
            'password_admin' => Hash::make('12345678'),  // Password di-hash dengan bcrypt
        ]);

        AkunAdminInstansi::create([
            'no_telp' => '081534567231',
            'email' => 'univ@gmail.com',
            'username_instansi' => 'admin1',
            'password_instansi' => Hash::make('12345675'),  // Password di-hash dengan bcrypt
        ]);
    }
}

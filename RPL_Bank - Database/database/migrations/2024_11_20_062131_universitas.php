<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Universitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin_instansi')->nullable();
            $table->string('nama_univ')->unique();
            $table->string('alamat_univ');
            $table->string('telp_univ');
            $table->string('jenis_univ');
            $table->string('email_univ')->unique();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status validasi
            $table->timestamps();

            $table->foreign('id_admin_instansi')->references('id')->on('akun_admin_instansi')->onDelete('cascade');
        });
        // mengatur nilai awal auto increment
        DB::statement('ALTER TABLE universitas AUTO_INCREMENT = 1000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
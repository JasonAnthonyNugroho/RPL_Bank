<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim')->primary();
            $table->string('nama_mhs');
            $table->string('alamat_mhs');
            $table->string('gender_mhs');
            $table->string('email_mhs')->unique();
            $table->string('no_telp_mhs')->unique();
            $table->unsignedBigInteger('id_univ');

            $table->foreign('id_univ')->references('id')->on('universitas')->onDelete('cascade');
        });
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

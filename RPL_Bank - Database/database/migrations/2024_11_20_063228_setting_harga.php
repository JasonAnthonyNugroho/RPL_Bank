<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SettingHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_harga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_univ')->unique();
            $table->bigInteger('spp');
            $table->bigInteger('kesehatan');
            $table->bigInteger('fasilitas');
            $table->bigInteger('hrg_sks');

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

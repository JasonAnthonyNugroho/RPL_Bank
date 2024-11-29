<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenVa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gen_va', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tgh');
            $table->char('no_va', 13);

            $table->foreign('id_tgh')->references('id')->on('tagihan')->onDelete('cascade');
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

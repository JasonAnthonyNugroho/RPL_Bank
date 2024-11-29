<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AkunAdminInstansi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_admin_instansi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('username_instansi')->unique();
            $table->string('password_instansi');
            $table->timestamps();
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

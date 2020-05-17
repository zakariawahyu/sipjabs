<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_pegawai')->unsigned();
            $table->bigInteger('id_jabstruklama')->unsigned();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('id_pegawai')->references('id')->on('pegawai')->onDelete('CASCADE');
            $table->foreign('id_jabstruklama')->references('id')->on('jabatan_struktural')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}

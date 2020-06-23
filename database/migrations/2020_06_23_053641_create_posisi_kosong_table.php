<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosisiKosongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posisi_kosong', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jabatanstruktural')->unsigned();
            $table->string('status_posisi');
            $table->timestamps();

            $table->foreign('id_jabatanstruktural')->references('id')->on('jabatan_struktural')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posisi_kosong');
    }
}

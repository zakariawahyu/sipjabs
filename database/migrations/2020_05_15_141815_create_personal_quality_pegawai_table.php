<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalQualityPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_quality_pegawai', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pegawai')->unsigned();
            $table->bigInteger('id_personalquality')->unsigned();
            $table->timestamps();

            $table->foreign('id_pegawai')->references('id')->on('pegawai')->onDelete('CASCADE');
            $table->foreign('id_personalquality')->references('id')->on('personal_quality')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_quality_pegawai');
    }
}

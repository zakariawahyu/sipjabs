<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nip')->unique();
            $table->string('status_pegawai');
            $table->bigInteger('id_jabatanstruktural')->unsigned();
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('gol_darah');
            $table->string('status_perkawinan');
            $table->string('agama');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('alamat');
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
        Schema::dropIfExists('pegawai');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanStrukturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_struktural', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_unitkerja')->unsigned();
            $table->bigInteger('id_jabatan')->unsigned();
            $table->bigInteger('id_unitbagian')->unsigned();
            $table->string('formasi_jabatan');
            $table->timestamps();

            $table->foreign('id_unitkerja')->references('id')->on('unit_kerja')->onDelete('CASCADE');
            $table->foreign('id_jabatan')->references('id')->on('jabatan')->onDelete('CASCADE');
            $table->foreign('id_unitbagian')->references('id')->on('unit_bagian')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatan_struktural');
    }
}

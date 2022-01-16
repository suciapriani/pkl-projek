<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggajiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pegawai')->unsigned();
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
            $table->bigInteger('id_jabatan')->unsigned();
            $table->foreign('id_jabatan')->references('id')->on('jabatans');
            $table->bigInteger('id_lembur')->unsigned();
            $table->foreign('id_lembur')->references('id')->on('lemburs');
            $table->bigInteger('id_cuti')->unsigned();
            $table->foreign('id_cuti')->references('id')->on('cutis');
            $table->string('total');
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
        Schema::dropIfExists('penggajians');
    }
}

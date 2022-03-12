<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jabatan')->unsigned();
            $table->foreign('id_jabatan')->references('id')->on('jabatans');
            $table->bigInteger('nik');
            $table->string('gambar')->nullable;
            $table->string('nama');
            $table->string('alamat');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('golongan');
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
        Schema::dropIfExists('pegawais');
    }
}

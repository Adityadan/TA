<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTambangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi');
            $table->string('target');
            $table->string('status');
            $table->string('hasil_pertambangan');
            $table->string('hari_tanggal');
            $table->string('kode_tp');
            $table->string('kordinat');
            $table->string('kemiringan');
            $table->string('blok');
            $table->string('cuaca');
            $table->string('logger');
            $table->string('digger');
            $table->string('landowner');
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
        Schema::dropIfExists('tambang');
    }
}

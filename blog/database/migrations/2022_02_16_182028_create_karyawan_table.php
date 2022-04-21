<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('devisi');
            $table->string('jabatan');
            $table->string('nik');
            $table->date('tanggallahir');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('no_telp');
            $table->unsignedBigInteger('tambang_id');
            $table->foreign('tambang_id')->references('id')->on('tambang');
            $table->unsignedBigInteger('rencana_kegiatan_id');
            $table->foreign('rencana_kegiatan_id')->references('id')->on('rencana_kegiatan');
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
        Schema::dropIfExists('karyawan');
    }
}

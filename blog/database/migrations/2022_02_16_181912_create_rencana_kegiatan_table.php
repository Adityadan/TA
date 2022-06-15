<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanaKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->string('musim');
            $table->dateTime('mulai');
            $table->dateTime('akhir');
            $table->integer('durasi');
            $table->integer('presentase');
            $table->string('ketergantungan');
            $table->unsignedBigInteger('tambang_id');
            $table->foreign('tambang_id')->references('id')->on('tambang');
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
        Schema::dropIfExists('rencana_kegiatan');
    }
}

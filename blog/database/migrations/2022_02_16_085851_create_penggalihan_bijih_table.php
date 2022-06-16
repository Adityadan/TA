<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggalihanBijihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggalihan_bijih', function (Blueprint $table) {
            $table->id();
            $table->integer('rencana_tahun');
            $table->integer('realisasi_tahun');
            $table->string('lokasi');
            $table->string('blok');
            $table->string('pit');
            $table->double('cutofgrade_ni',8,2);
            $table->date('bulan');
            $table->double('total_bulan',8,2);
            $table->double('total_brutto',8,2);
            $table->double('recovery_pertambangan',8,2);
            $table->double('total_nett',8,2);
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
        Schema::dropIfExists('penggalihan_bijih');
    }
}

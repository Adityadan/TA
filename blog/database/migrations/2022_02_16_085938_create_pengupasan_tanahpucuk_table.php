<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengupasanTanahpucukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengupasan_tanahpucuk', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_rencana');
            $table->integer('tahun_realisasi');
            $table->string('lokasi');
            $table->string('bulan');
            $table->double('jumlah_bcm',8,2);
            $table->double('jumlah_ton',8,2);
            $table->double('berat_jenis_material',8,2);
            $table->integer('keteragan');
            $table->integer('alat_gali_muat');
            $table->integer('alat_dorong');
            $table->integer('alat_bongkar');
            $table->integer('alat_angkut');
            $table->integer('jarak_angkut');
            $table->string('satuan');
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
        Schema::dropIfExists('pengupasan_tanahpucuk');
    }

    
}

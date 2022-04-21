<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePitWpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pit_wp', function (Blueprint $table) {
            $table->id();
            $table->integer('no_pit');
            $table->integer('no_wp');
            $table->integer('tahun');
            $table->double('rom_hauling',8,2);
            $table->unsignedBigInteger('alat_berat_id');
            $table->foreign('alat_berat_id')->references('id')->on('alat_berat');
            $table->integer('distance');
            $table->integer('max_load');
            $table->double('cycle_time',8,2);
            $table->double('cap',8,2);
            $table->integer('dt_need');
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
        Schema::dropIfExists('pit_wp');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatBeratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat_berat', function (Blueprint $table) {
            $table->id();
            $table->string('fungsi');
            $table->string('merk');
            $table->string('jenis');
            $table->string('tipe');
            $table->integer('jumlah');
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
        Schema::dropIfExists('alat_berat');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBauksitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bauksit', function (Blueprint $table) {
            $table->id();
            $table->double('cf', 8, 2);
            $table->double('si02', 8, 2);
            $table->double('fe203', 8, 2);
            $table->double('ti02', 8, 2);
            $table->double('ai203', 8, 2);
            $table->double('ratarata_tebal_ore', 8, 2);
            $table->double('ratarata_tebal_ob', 8, 2);
            $table->double('resources', 8, 2);
            $table->double('total_ob', 8, 2);
            $table->double('luas_area', 8, 2);
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
        Schema::dropIfExists('bauksit');
    }
}

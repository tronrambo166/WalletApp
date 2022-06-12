<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_frames', function (Blueprint $table) {
           $table->id();
            $table->string('fm_name');
            $table->string('fm_size');
            $table->integer('fm_quantity');
            $table->string('fm_price');
            $table->string('fm_total_price');

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
        Schema::dropIfExists('map_frames');
    }
}

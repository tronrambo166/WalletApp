<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapinfos', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->string('place');
            $table->string('date');
            $table->string('latlon');
            $table->string('orientation');
            $table->string('posterSize');
            $table->string('posterTheme');
            $table->string('posterStyle');
            $table->integer('quantity');
             $table->string('price');
              $table->string('total_price');
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
        Schema::dropIfExists('mapinfos');
    }
}

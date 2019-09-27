<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->decimal('power', 2, 2);
            $table->string('size', 20);
            $table->integer('color_t');
            $table->integer('min_flux');
            $table->integer('max_flux');
            $table->string('image', 255);
            $table->decimal('price', 8, 2);
            $table->integer('family_id');
            $table->string('description', 500);
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
        Schema::dropIfExists('leds');
    }
}

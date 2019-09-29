<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->integer('angle');
            $table->string('image', 255);
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families');
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
        Schema::dropIfExists('optics');
    }
}

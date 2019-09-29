<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_family', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_family');
    }
}

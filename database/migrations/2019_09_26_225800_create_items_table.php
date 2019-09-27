<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->integer('family_id');
            $table->integer('led_id');
            $table->integer('lens_id');
            $table->integer('frame_id');
            $table->integer('driver_id');
            $table->integer('order_id');
            $table->integer('wishlist_id');
            $table->decimal('price', 8, 2);
            $table->string('image', 255);
            $table->string('code');
            $table->integer('quantity');
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
        Schema::dropIfExists('items');
    }
}

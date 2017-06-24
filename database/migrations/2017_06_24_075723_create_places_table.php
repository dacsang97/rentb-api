<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('phone');
            $table->double('lat');
            $table->double('lon');
            $table->integer('image_id')->unsigned()->nullable();
            $table->foreign('image_id')->references('id')->on('images')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('price_id')->unsigned()->nullable();
            $table->foreign('price_id')->references('id')->on('prices')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('places');
    }
}

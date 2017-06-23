<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTagsPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_places', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('place_id')->references('id')->on('places');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_places');
    }
}

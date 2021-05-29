<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('seasons');
            $table->longText('description');
            $table->timestamps();
        });
        Schema::create('serie_seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('season_id'); //actually serie id
            $table->string('season_name');
            $table->timestamps();
            $table->foreign('season_id')->references('id')->on('series')->onDelete('cascade');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}

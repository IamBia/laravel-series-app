<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSeasonIdOnTableSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serie_seasons', function (Blueprint $table) {
            $table->renameColumn('season_id', 'serie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serie_seasons', function (Blueprint $table) {
            $table->renameColumn('serie_id','season_id');
        });
    }
}

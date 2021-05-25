<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('matches', function(Blueprint $table){
            $table->increments('id');
            $table->string('team1',256);
            $table->string('team2',256);
            $table->integer('goal1');
            $table->integer('goal2');
            $table->string('winner',256);
            $table->string('stadium',256);
            $table->string('match_type',20);
            $table->date('match_date');
            $table->time('match_time');
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
        public function down()
    {
        //
        Schema::dropIfExists('matches');
    }
}

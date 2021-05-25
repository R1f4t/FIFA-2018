<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('teams', function(Blueprint $table){
            $table->increments('id');
            $table->string('name',255);
            $table->integer('ranking');
            $table->string('group_no');
            $table->integer('cup_win');
            $table->integer('match_played');
            $table->integer('goals');
            $table->string('slug')->nullable();
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
        //
        Schema::dropIfExists('teams');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('players', function(Blueprint $table){
            $table->increments('id');
            $table->string('name',256);
            $table->integer('age');
            $table->integer('height');
            $table->string('team',20);
            $table->string('position', 30);
            $table->integer('goal');
            $table->integer('assist');
            $table->string('club',255);
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
        Schema::dropIfExists('players');
    }
}

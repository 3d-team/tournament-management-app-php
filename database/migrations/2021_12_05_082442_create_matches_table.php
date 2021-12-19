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
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_1');
            $table->integer('team_2');
            $table->string('time');
            $table->string('date')->nullable();
            $table->string('address');
            $table->integer('goals_1')->nullable();
            $table->integer('goals_2')->nullable();
            $table->integer('redcard_1')->nullable();
            $table->integer('redcard_2')->nullable();
            $table->integer('yellowcard_1')->nullable();
            $table->integer('yellowcard_2')->nullable();
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
        Schema::dropIfExists('matches');
    }
}

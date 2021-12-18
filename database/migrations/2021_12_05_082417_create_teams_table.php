<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('coach');
            $table->string('address');
            $table->string('logo')->nullable();
            $table->string('uniform')->nullable();
            $table->integer('score')->nullable();
            $table->integer('tournament_id')->nullable();
            $table->timestamps();
        });

        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [1, 'U23 Việt Nam', "Park Hang-seo", "Việt Nam"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [2, 'Lào', "V. Selvaraj", "Lào"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [3, 'Campuchia', "Felix Agustin Gonzalez Dalmas", "Campuchia"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [4, 'Indonesia', "Shin Tae-yong", "Indonesia"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}

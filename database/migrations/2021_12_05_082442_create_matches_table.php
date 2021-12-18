<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->timestamps();
        });

        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [1, 2, 1,"19h30", "06/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [2, 4, 3,"19h30", "09/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [3, 2, 4,"19h30", "12/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [4, 3, 2,"19h30", "15/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [5, 4, 1,"19h30", "15/12/2021", "Bishan ActiveSG Stadium"]);
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

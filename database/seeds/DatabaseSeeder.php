<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [1, 'U23 Việt Nam', "Park Hang-seo", "Việt Nam"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [2, 'Lào', "V. Selvaraj", "Lào"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [3, 'Campuchia', "Felix Agustin Gonzalez Dalmas", "Campuchia"]);
        DB::insert('insert into teams (id, name, coach, address) values (?, ?, ?, ?)', [4, 'Indonesia', "Shin Tae-yong", "Indonesia"]);

        DB::insert('insert into matches (id, team_1, team_2, time, date, address, goals_1, goals_2, redcard_1, redcard_2, yellowcard_1,yellowcard_2) values (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)', [1, 2, 1,"19h30", "06/12/2021", "Bishan ActiveSG Stadium", 2, 1, 1, 1, 0, 0]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address, goals_1, goals_2, redcard_1, redcard_2, yellowcard_1,yellowcard_2) values (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)', [2, 4, 3,"19h30", "09/12/2021", "Bishan ActiveSG Stadium", 3, 0, 1, 2, 1, 0]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address, goals_1, goals_2, redcard_1, redcard_2, yellowcard_1,yellowcard_2) values (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)', [3, 2, 4,"19h30", "12/12/2021", "Bishan ActiveSG Stadium", 2, 2, 0, 0, 0, 1]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address, goals_1, goals_2, redcard_1, redcard_2, yellowcard_1,yellowcard_2) values (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)', [4, 3, 2,"19h30", "15/12/2021", "Bishan ActiveSG Stadium", 5, 4, 0, 1, 0, 0]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address, goals_1, goals_2, redcard_1, redcard_2, yellowcard_1,yellowcard_2) values (?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?)', [5, 4, 1,"19h30", "15/12/2021", "Bishan ActiveSG Stadium", 1, 1, 1, 1, 1, 1]);
    }
}

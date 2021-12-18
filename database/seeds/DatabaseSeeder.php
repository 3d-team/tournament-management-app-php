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

        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [1, 2, 1,"19h30", "06/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [2, 4, 3,"19h30", "09/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [3, 2, 4,"19h30", "12/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [4, 3, 2,"19h30", "15/12/2021", "Bishan ActiveSG Stadium"]);
        DB::insert('insert into matches (id, team_1, team_2, time, date, address) values (?, ?, ?, ?, ?, ?)', [5, 4, 1,"19h30", "15/12/2021", "Bishan ActiveSG Stadium"]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FbMatch extends Model
{
    protected $table = 'matches';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_1', 
        'team_2', 
        'time', 
        'date',
        'address',
        'goals_1',
        'goals_2',
        'redcard_1',
        'redcard_2',
        'yellowcard_1',
        'yellowcard_2'
    ];
}

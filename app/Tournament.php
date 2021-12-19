<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'tournaments';

    protected $fillable = [
        'name', 
        'logo', 
        'number_team', 
        'form',
        'day_start',
        'day_end'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FbMatch extends Model
{
    protected $table = 'matches';

    protected $fillable = [
        'team_1', 
        'team_2', 
        'time',
        'address'
    ];
}

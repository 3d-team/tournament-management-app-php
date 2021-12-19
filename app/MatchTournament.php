<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchTournament extends Model
{
    protected $table = 'match_tournament';

    protected $fillable = [
        'tournament_id', 
        'match_id', 
        'fixture'
    ];
}

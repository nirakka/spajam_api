<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = [
        'game_id','team_a_score','team_b_score','win_team_id'
    ];

    public function game(){
        return $this->belongsTo('App\GameSchedule', 'game_id','id');
    }

    public function winTeam(){
        return $this->belongsTo('App\Team','win_team_id','id');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameSchedule extends Model
{
    //
    protected $fillable = ['start_time','place','team_a_id', 'team_b_id' ];

    public function teamA(){
        return $this->belongsTo('App\Team', 'team_a_id','id');
    }

    public function teamB(){
        return $this->belongsTo('App\Team','team_b_id', 'id');
    }
}

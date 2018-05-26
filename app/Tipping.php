<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipping extends Model
{
    //
    protected $fillable = ['game_id','user_id', 'team_id', 'money'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }

    public function gam(){
        return $this->belongsTo('App\GameSchedule','game_id', 'id');
    }
}

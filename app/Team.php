<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 * @property mixed tipping
 */
class Team extends Model
{
    //
    protected $fillable =
        ['prefecture','name','sum_money'];

    public function tipping(){
        return $this->hasMany('App\Tipping', 'team_id','id');
    }
}

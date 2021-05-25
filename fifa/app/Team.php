<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = ['name','ranking','group_no','cup_win','slug','coach','match_played','goals'];

    public function players()
    {
        return $this->hasMany('App\Player');
    }

}

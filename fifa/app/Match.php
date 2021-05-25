<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
	protected $fillable = ['team1', 'goal1', 'team2', 'goal2', 'winner', 'stadium','stadium_id', 'match_type', 'match_date', 'match_time', 'slug'];

	public function stadiums()
	{
		return $this->belongsTo('App\Stadium');
	}
}

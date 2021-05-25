<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = ['name','age','height','team','position','goal','assist','slug','team_id'];

    public function teams()
	{
		return $this->belongsTo('App\Team');
	}
}

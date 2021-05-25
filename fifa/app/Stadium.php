<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    //
    public $table = 'stadiums';
    protected $fillable = ['name','city','capacity','match_played','slug'];

    public function matches()
    {
    	return $this->hasMany('App\Match');
    }
}

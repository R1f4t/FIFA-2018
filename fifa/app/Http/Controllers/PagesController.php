<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class PagesController extends Controller
{
    //
    public function home()
    {
    	return view('home');
    }

    public function show($slug)
	{
		$team = Team::whereSlug($slug)->firstOrFail();
		$players = Team::whereSlug($slug)->firstOrFail()->players;
		return view('teams.show', compact('team', 'players'));
	}
}

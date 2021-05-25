<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamFormRequest;
use App\Team;

class TeamsController extends Controller
{
    //
    public function create()
	{
		return view('teams.create');
	}

	public function store(TeamFormRequest $request)
	{
		//return $request->all();
		$slug = uniqid();
		$team = new Team(array('name' => $request->get('name'),'group_no' => $request->get('group_no'),'coach' => $request->get('coach'),'match_played' => $request->get('match_played'),'goals' => $request->get('goals'),'ranking' => $request->get('ranking'),'cup_win' => $request->get('cup_win'),'slug' => $slug));
		$team->save();
		return redirect('/teamcreate')->with('status', 'Your team has been created! Its unique id is: '.$slug);
}

    public function team()
	{
		$teams = Team::all();
		return view('teams.team', compact('teams'));
	}

	public function show($slug)
	{
		$team = Team::whereSlug($slug)->firstOrFail();
		$players = Team::whereSlug($slug)->firstOrFail()->players;
		return view('teams.show', compact('team', 'players'));
	}
}

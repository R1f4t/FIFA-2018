<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerFormRequest;
use App\Player;

class PlayersController extends Controller
{
    //
    public function create()
	{
		return view('players.create');
	}

	public function store(PlayerFormRequest $request)
	{
		//return $request->all();
		$slug = uniqid();
		$player = new Player(array('name' => $request->get('name'),'age' => $request->get('age'),'height' => $request->get('height'),'team' => $request->get('team'),'goal' => $request->get('goal'),'assist' => $request->get('assist'),'position' => $request->get('position'),'team_id' => $request->get('team_id'),'slug' => $slug));
		$player->save();
		return redirect('/playercreate')->with('status', 'Your player has been created! Its unique id is: '.$slug);
}

    public function player()
	{
		$players = Player::all();
		return view('players.player', compact('players'));
	}

	public function show($slug)
	{
		$player = Player::whereSlug($slug)->firstOrFail();
		return view('players.show', compact('player'));
	}
}

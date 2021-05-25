<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StadiumFormRequest;
use App\Stadium;

class StadiumsController extends Controller
{
    //
    public function create()
	{
		return view('stadiums.create');
	}

	public function store(StadiumFormRequest $request)
	{
		//return $request->all();
		$slug = uniqid();
		$stadium = new Stadium(array('name' => $request->get('name'),'city' => $request->get('city'),'capacity' => $request->get('capacity'),'match_played' => $request->get('match_played'),'slug' => $slug));
		$stadium->save();
		return redirect('/stadiumcreate')->with('status', 'Your stadium has been created! Its unique id is: '.$slug);
}

    public function stadium()
	{
		$stadiums = Stadium::all();
		return view('stadiums.stadium', compact('stadiums'));
	}

	public function show($slug)
	{
		$stadium = Stadium::whereSlug($slug)->firstOrFail();
		$matches = Stadium::whereSlug($slug)->firstOrFail()->matches;
		return view('stadiums.show', compact('stadium', 'matches'));
	}
}

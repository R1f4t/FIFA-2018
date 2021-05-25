<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MatchFormRequest;
use App\Match;

class MatchesController extends Controller
{
    //
    public function create()
	{
		return view('matches.create');
	}

	public function store(MatchFormRequest $request)
	{
		$slug = uniqid();
		$match = new Match(array('team1' => $request->get('team1'),'goal1' => $request->get('goal1'),'team2' => $request->get('team2'),'goal2' => $request->get('goal2'),'winner' => $request->get('winner'),'stadium' => $request->get('stadium'),'stadium_id' => $request->get('stadium_id'),'match_type' => $request->get('match_type'),'match_date' => $request->get('match_date'),'match_time' => $request->get('match_time'),'slug' => $slug));
		$match->save();
		return redirect('/matchcreate')->with('status', 'Your match has been created! Its unique id is: '.$slug);
}

    public function match()
	{
		$matches = Match::all();
		return view('matches.match', compact('matches'));
	}

	public function show($slug)
	{
		$match = Match::whereSlug($slug)->firstOrFail();
		return view('matches.show', compact('match'));
	}

	public function filter()
    {
        $groups = Match::where('match_type', 'Group')->get();
        $knockouts = Match::where('match_type', 'Knockout')->get();
        $semifinals = Match::where('match_type', 'Semifinal')->get();
        $playoffs = Match::where('match_type', 'Play-off for third place')->get();
        $finals = Match::where('match_type', 'Final')->get();
        $quarters = Match::where('match_type', 'Quarter-final')->get();
        return view('matches.filter', compact('groups', 'knockouts', 'semifinals', 'playoffs', 'finals', 'quarters'));
    }

}

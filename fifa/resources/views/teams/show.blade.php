@extends('master')
@section('title', 'View a team')
@section('content')

<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component" style="opacity: 0.7;">
<div class="content">
<h2> {!! $team->name !!}</h2>
<h3> Group {!! $team->group_no !!} </h3>
<h4>Coach: {!! $team->coach !!} <br> Matches Played: {!! $team->match_played !!} <br>Goals Scored: {!! $team->goals !!}
<br>FIFA Ranking: {!! $team->ranking !!} | WorldCup won: {!! $team->cup_win !!} times</h4>

<h3 style="text-align: left;"><b>Players</b></h3>
@if ($players->isEmpty())
			<p> No Player.</p>
@else
<table class="table">
	<tbody>
		@foreach($players as $player)
		<tr>
			<td><a href="{!! action('PlayersController@show', $player->slug) !!}">{!! $player->name !!}</td>
			<td>{!! $player->position !!}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif

</div>
@endsection
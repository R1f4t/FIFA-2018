@extends('master')
@section('title', 'Matches')
@section('content')

<div style="text-align: right; margin-right:40px;">
	<h4><a href="filter" style="text-decoration: none; color: white; font-size: 20px;">Filter Matches</a></h4>
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default" style="opacity: 0.7;" >
			<div class="panel-heading">
				<h2> Matches </h2>
			</div>
		@if ($matches->isEmpty())
			<p> No Match.</p>
		@else
		<table class="table">
			<!--<thead>
			<tr>
				<th>Match ID</th>
				<th>Team1</th>
				<th>Team2</th>
				<th>Winner</th>
				<th>Stadium</th>
				<th>Goal1</th>
				<th>Goal2</th>
				<th>Match Date</th>
				<th>Match Time</th>
			</tr>
		</thead>-->
	<tbody>
		@foreach($matches as $match)
		<tr>
	
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td>-</td>
			<td>{!! $match->goal2 !!}</td>
			<td>{!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->match_date !!}</td>
			<td>{!! $match->match_time !!}</td>-->

		</tr>
		@endforeach
	</tbody>
</table>
@endif
</div>
</div>
</div>
</div>
@endsection
@extends('master')
@section('title', 'View a stadium')
@section('content')

<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component" style="opacity: 0.8;">
<div class="content">
<h3><b> {!! $stadium->name !!}</b> <br>{!! $stadium->city !!} </h3>
<h4> Capacity: {!! $stadium->capacity !!} <br> Matches Played: {!! $stadium->match_played !!} </h4>
<h3 style="text-align: left;"><b>Matches</b></h3>
@if ($matches->isEmpty())
			<p> No Match.</p>
@else
<table class="table">
	<tbody>
		@foreach($matches as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}">Match {!! $match->id !!}</a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td>-</td>
			<td>{!! $match->goal2 !!}</td>
			<td>{!! $match->team2 !!}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif
</div>
</div>
</div>
@endsection
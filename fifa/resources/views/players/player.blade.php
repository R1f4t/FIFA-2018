@extends('master')
@section('title', 'Players')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Players </h2>
			</div>
		@if ($players->isEmpty())
			<p> No Player.</p>
		@else
		<table class="table" style="font-size: 19px;">
			<!--<thead>
			<tr>
				<th>Player Name</th>
				<th>Team</th>
				<th>Position</th>
			</tr>
		</thead>-->
	<tbody>
		@foreach($players as $player)
		<tr>
			<td><a href="{!! action('PlayersController@show', $player->slug) !!}">{!! $player->name !!}</a> <br> <p style="font-size: 15px;">{!! $player->position !!}</p></td>
			<td>{!! $player->team !!}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif
</div>
</div>
@endsection
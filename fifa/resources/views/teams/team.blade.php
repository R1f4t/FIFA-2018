@extends('master')
@section('title', 'Teams')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Teams </h2>
			</div>
		@if ($teams->isEmpty())
			<p> No Team.</p>
		@else
		<table class="table" style="text-align: center; font-size: 19px;">
			<!--<thead>
			<tr>
				<th>Team Name</th>
				<th>Group</th>
			</tr>
		</thead>-->
	<tbody>
		@foreach($teams as $team)
		<tr>
			<td><a href="{!! action('TeamsController@show', $team->slug) !!}">{!! $team->name !!}</a><br>Group {!! $team->group_no !!}</td>
			
		</tr>
		@endforeach
	</tbody>
</table>
@endif
</div>
</div>
@endsection
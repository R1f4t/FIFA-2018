@extends('master')
@section('title', 'Stadiums')
@section('content')
	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Stadiums </h2>
			</div>
		@if ($stadiums->isEmpty())
			<p> No Stadium.</p>
		@else
		<table class="table" style="font-size: 18px;">
			<!--<thead>
			<tr>
				<th>Stadium ID</th>
				<th>Stadium Name</th>
				<th>City</th>
			</tr>
		</thead>-->
	<tbody>
		@foreach($stadiums as $stadium)
		<tr style="text-align: center;">
			
			<td><a href="{!! action('StadiumsController@show', $stadium->slug) !!}">{!! $stadium->name !!}</a></td>
			
		</tr>
		@endforeach
	</tbody>
</table>
@endif
</div>
</div>
@endsection
@extends('master')
@section('title', 'Filtered matches')
@section('content')
	
<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Group Phase </h2>
			</div>
		@if ($groups->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($groups as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>

	<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Knockout Phase </h2>
			</div>
		@if ($knockouts->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($knockouts as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>
<br>

<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Quarter-Finals </h2>
			</div>
		@if ($quarters->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($quarters as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>

<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Semi-Finals </h2>
			</div>
		@if ($semifinals->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($semifinals as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>
<br>

<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Play-off for third place </h2>
			</div>
		@if ($playoffs->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($playoffs as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>
<br>

<div class="container col-md-8 col-md-offset-2"><br>
		<div class="panel panel-default" style="opacity: 0.7;">
			<div class="panel-heading">
				<h2> Final </h2>
			</div>
		@if ($finals->isEmpty())
			<p> No match.</p>
		@else
		<table class="table">
		@foreach($finals as $match)
		<tr>
			<td><a href="{!! action('MatchesController@show', $match->slug) !!}" style="text-decoration: none;">Match {!! $match->id !!} </a></td>
			<td>{!! $match->team1 !!}</td>
			<td>{!! $match->goal1 !!}</td>
			<td> - </td>
			<td>{!! $match->goal2 !!} &nbsp&nbsp</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {!! $match->team2 !!}</td>
			<!--<td>{!! $match->stadium !!}</td>
			<td>{!! $match->date !!}</td>
			<td>{!! $match->time !!}</td>-->
		</tr>
		@endforeach
</table>
@endif
</div>
</div>
@endsection
@extends('master')
@section('title', 'View a match')
@section('content')

<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component"  style="opacity: 0.7;">
<div class="content">
<h2> {!! $match->team1 !!} &nbsp <b>{!! $match->goal1 !!} - {!! $match->goal2 !!}</b> &nbsp {!! $match->team2 !!}</h2>
<h3><b>{!! $match->stadium !!} <br></h3>
<h4>{!! $match->match_type !!} match </b></h4>
<h4><b>Match Time: {!! $match->match_date !!} | {!! $match->match_time !!}</b></h4>
</div>
</div>
</div>
@endsection
@extends('master')
@section('title', 'create team')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Insert A new Team</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Team Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Group</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="group_no" placeholder="Group No." name="group_no">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Coach</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="coach" placeholder="Coach Name" name="coach">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Matches Played</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="match_played" placeholder="Total Matches Played" name="match_played">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Goals Scored</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="goals" placeholder="Goals" name="goals">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Ranking</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="ranking" placeholder="Ranking" name="ranking">
                            </div>
                        </div>

                         <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Total World Cup Win</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="cup_win" placeholder="World Cup Win" name="cup_win">
                            </div>
                        </div>

                  
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
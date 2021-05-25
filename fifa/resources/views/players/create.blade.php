@extends('master')
@section('title', 'create player')
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
                    <legend>Insert A new Player</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Age</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="age" placeholder="Age" name="age">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Height</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="height" placeholder="Height(in cm)" name="height">
                            </div>
                        </div>

                         <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Team</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="team" placeholder="Player Team" name="team">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Team ID</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="team_id" placeholder="Team ID" name="team_id">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Position</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="position" placeholder="Player Position" name="position">
                            </div>
                        </div>

                           <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Goals Scored</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="goal" placeholder="Goal" name="goal">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Assists</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="assist" placeholder="Assist" name="assist">
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
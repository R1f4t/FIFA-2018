@extends('master')
@section('title', 'create stadium')
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
                    <legend>Insert A new Stadium</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Stadium Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Location</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="city" placeholder="City" name="city">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Capacity</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="capacity" placeholder="Stadium Capacity" name="capacity">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Matches Played</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="match_played" placeholder="Total Matches Played" name="match_played">
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
@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Create a hotel</h2>
        <hr/>
        {!! Form::open() !!}
        <div class="col-md-6 col-md-offset-3">

            <div class="mw1000 center-block">
                @if(session('message'))
                    {{session('message')}}
                @endif
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address">
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city">
            </div>

            <div class="form-group{{ $errors->has('ratings') ? ' has-error' : '' }}">
                <label for="ratings">Ratings</label>
                <input type="number" class="form-control" name="ratings" value="5" readonly>
                <span class="help-block">All hotel ratings start from 5 star</span>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-success">
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection
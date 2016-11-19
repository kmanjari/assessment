@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Post a comment for {{$hotel->name}}</h2>
        <hr/>
        {!! Form::open() !!}
        <div class="col-md-6 col-md-offset-3">

            @if(session('message'))
            <div class="alert alert-info">
                    {{session('message')}}
            </div>
            @endif

            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                <label for="comment">Comment</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-success">
            </div>

        </div>
        {!! Form::close() !!}
    </div>

    @endsection
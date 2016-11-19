@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="pull-left"><h3>Comments for {{$hotels->name}}</h3></div>
                    @if(Auth::check())
                        <div class="pull-right">
                            <a href="/hotel/{{$hotels->id}}/comment">
                                <button class="btn btn-success" type="button">Post comment</button>
                            </a>
                        </div>
                    @endif
                </div>
            </div><!-- /col-sm-12 -->
        </div><!-- /row -->

        <div class="row">
            @foreach($hotels->comments as $hotel)
            <div class="col-sm-1">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{$hotel->user->name}}</strong> <span
                                class="text-muted">{{ \Carbon\Carbon::createFromTimestamp(strtotime($hotel->created_at))->diffForHumans()}}</span>
                    </div>
                    <div class="panel-body">
                        {{$hotel->comment}}
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->
            @endforeach
        </div><!-- /row -->

    </div><!-- /container --
    @endsection
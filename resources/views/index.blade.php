@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-responsive">
            <thead>
            <tr>
                <td>Sr. no</td>
                <td>Name</td>
                <td>Address</td>
                <td>City</td>
                <td>Ratings</td>
            </tr>
            </thead>

            <tbody>
            @foreach($hotels as $hotel)
            <tr>
                <td>{{$hotel->id}}</td>
                <td><a href="/hotel/{{$hotel->id}}">{{$hotel->name}}</a></td>
                <td>{{$hotel->address}}</td>
                <td>{{$hotel->city}}</td>
                <td>{{$hotel->ratings}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection
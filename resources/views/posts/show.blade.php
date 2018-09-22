@extends('layouts.app')

@section('content')
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$record->title}}</h1>
        <div class="well">
            <h3>{!!$record->body!!}</h3> 
        </div>
        <hr>
        <small>Written on {{$record->created_at}}</small>
@endsection
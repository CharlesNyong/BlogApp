@extends('layouts.app')

@section('content')
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$record->title}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$record->cover_image}}">
        <br/><br/>
        <div class="well">
            <h3>{!!$record->body!!}</h3> 
        </div>
        <hr>
        <small>Written on {{$record->created_at}} by {{$record->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $record->user_id)
                <a href="/posts/{{$record->id}}/edit" class="btn btn-default">Edit</a>

                {!! Form::open(['action' => ['PostsController@destroy', $record->id], 'method' => 'POST', 'class'=>'pull-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif    
        @endif
@endsection
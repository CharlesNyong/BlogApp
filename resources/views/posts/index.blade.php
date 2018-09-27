@extends('layouts.app')

@section('content')
        <h1>Post</h1>
        @if(count($allPost) > 0)
            @foreach($allPost as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>    
                    </div>    
                    <h3><a href="/posts/{{$post->id}}"><?php echo $post->title; ?><a href="#"></h3> 
                    <small>Written on <?php echo $post->created_at; ?> by {{$post->user->name}} </small>
                </div>
           @endforeach    
        @else
            <p>No data in table</p>
        @endif
@endsection
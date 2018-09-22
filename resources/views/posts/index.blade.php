@extends('layouts.app')

@section('content')
        <h1>Post</h1>
        @if(count($allPost) > 0)
            @foreach($allPost as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}"><?php echo $post->title; ?><a href="#"></h3> 
                    <small>Written on <?php echo $post->created_at; ?> </small>
                </div>
           @endforeach    
        @else
            <p>No data in table</p>
        @endif
@endsection
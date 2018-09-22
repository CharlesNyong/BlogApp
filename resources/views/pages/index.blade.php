{{-- // import the file with the html template --}}
@extends('Layouts.app') 

{{-- references the content id used to identify the main body of a document in layout file --}}
@section('content')
    <div class="jumbotron text-center">  
        <h1><?php echo $title;?></h1>
        <p>This is the index page<p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a><p>    
    <div>     
@endsection
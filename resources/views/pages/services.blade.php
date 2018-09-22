{{-- // import the file with the html template --}}
@extends('Layouts.app') 

@section('content')
        <h1>{{$title}}</h1>
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $serviceType)
                    <li class="list-group-item">{{$serviceType}}</li>
                @endforeach    
            </ul>
        @endif    
@endsection            
@extends('layout.shell')
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>   
    <h3>Image meta data</h3> 
    @if (count($exifArray) > 0)
        <ul class="list-group">
            @foreach ($exifArray as $name => $property)
            <li class="list-group-item">{{$name}} - {{$property}}</li>
            @endforeach
        </ul>
    @endif
</div>

@endsection


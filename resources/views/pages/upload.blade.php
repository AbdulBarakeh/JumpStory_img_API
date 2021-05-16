@extends('layout.shell')
@section('content')
<div class="jumbotron text-center">

    <h1>{{$title}}</h1>   

    {{-- {!! Form::open(array('route' => 'post.upload')) !!}
        <div class="form-group">
            {{Form::label('title','upload image')}}
            {{Form::file($name, $attributes = array())}}
            {{Form::file('image')}}

        </div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} --}}

<form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
    <h2>Choose image</h2>
    <input type="file" name="file">
    <button type="submit" name="submit" class="btn btn-primary">Upload</button>

</form>

</div>

@endsection

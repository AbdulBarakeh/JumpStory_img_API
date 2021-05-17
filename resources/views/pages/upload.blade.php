@extends('layout.shell')
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1> 
    <h3>Valid image extensions: jpg, jpeg</h3>
    <form action="fileupload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
    </form>     
</div>
@endsection
{{--  unsuccessfull laravel form
    {!! Form::open(array('action' => 'fileupload')) !!}
    {{ csrf_field() }}
    <div class="form-group">
            {{Form::label('title','upload image')}}
            {{Form::file($name, $attributes = array())}}
            {{Form::file('image')}}

        </div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} --}}




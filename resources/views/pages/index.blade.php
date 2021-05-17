@extends('layout.shell')
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>   
    <h2>Choose image</h2>
        <form action="getimagedetail" method="post" class="form-group">
            @csrf
            @if (count($images) > 0)
            <select name="imgpick" id="imgpick" class="form-group-item">
                @foreach ($images as $name => $property)
                    <option value="{{$property}}" class="form-group-item">{{$property}}</option>
                @endforeach
            </select>
            @endif
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
</div>

@endsection


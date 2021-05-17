@extends('layout.shell')
@section('content')

<div class="jumbotron text-center">

 <h1>{{$title}}</h1>   

        <form action="getimagedetail" method="post" class="form-group">
            @csrf
            @if (count($images) > 0)
            <select name="imgpick" id="imgpick" class="form-group-item">
                @foreach ($images as $name => $property)
                <option value="{{$name}}" class="form-group-item">{{$property}}</option>
                @endforeach
            </select>
            @endif
            <input type="submit" value="submit" class="btn btn-primary">

        </form>

</div>
<div class="jumbotron text-center">
        <h3>Image meta data</h3>
    @if (count($exifArray) > 0)
        <ul class="list-group">
            @foreach ($exifArray as $name => $property)
            <li class="list-group-item">{{$name}} - {{$property}}</li>
            @endforeach
        </ul>
    @endif

</div>




</div>

@endsection


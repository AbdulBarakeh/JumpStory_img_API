@extends('layout.shell')
@section('content')
<div class="jumbotron text-center">

    <h1><?php echo $title;?></h1>
    <p>Newly aquired skills are:</p>
    @if (count($competences) > 0)
    <ul class="list-group">
        @foreach ($competences as $skill)
        <li class="list-group-item">{{$skill}}</li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
    

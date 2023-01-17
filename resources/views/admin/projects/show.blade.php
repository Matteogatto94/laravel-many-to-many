@extends('layouts.admin')

@section('content')



@if($project->cover_image)
<img class="img-fluid" src="{{asset('storage/' . $project->cover_image)}}" alt="">
@else
<div class="placeholder p-5 bg-secondary">Placeholder</div>

@endif
<h1>{{$project->title}}</h1>
<h5>{{$project->slug}}</h5>
<div class="category">
    <strong>Category:</strong>
    {{$project->category ? $project->category->name : 'Uncategorized'}}
</div>

<div class="technologies">
    <strong>Technologies:</strong>
    @if(count($project->technologies) > 0 )

    @foreach($project->technologies as $technology)
    <span>#{{$technology->name}} </span>
    @endforeach

    @else
    <span>No tag associated to the current project</span>
    @endif


</div>

<div class="content">
    {{$project->body}}
</div>

@endsection
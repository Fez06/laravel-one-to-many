@extends('layouts.app')

@section('content')

<h1>{{$project->title}}</h1>

<p>
    {{$project->description}}
</p>

<div>
    <img src="{{ asset('storage/' . $project->image)}}" alt="project image">
</div>
@endsection
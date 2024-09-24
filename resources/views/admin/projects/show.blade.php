@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $project->title }}</h1>
    <h4>{{ $project->category }}</h4>
    <p>{{ $project->description }}</p>
</div>

@endsection

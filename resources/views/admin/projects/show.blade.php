@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ $project->title }}</h1>
    <h4>Categoria: {{ $project->category }}</h4>
    <h5>Tipo: {{ $project->type ? $project->type->name : 'NESSUN TIPO' }}</h5>
    <p>{{ $project->description }}</p>
</div>

@endsection

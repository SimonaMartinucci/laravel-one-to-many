@extends('layouts.app')

@section('content')

<div class="container">
    
    <h2>Modifica di {{ $project->title }}</h2>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
        <label for="title">Titolo</label>
        <input type="text" name="title" value="{{ old('title', $project->title) }}" class="form-control">

        <label for="category">Categoria</label>
        <input type="text" name="category" value="{{ old('category', $project->category) }}" class="form-control">

        <label for="description">Descrizione</label>
        <input type="textarea" name="description" value="{{ old('description', $project->description) }}" class="form-control">

        <label for="start_date">Data inizio</label>
        <input type="date" name="start_date" value="{{ old('start_date', $project->start_date) }}" class="form-control">

        <label for="project_url">URL progetto</label>
        <input type="text" name="project_url" value="{{ old('project_url', $project->project_url) }}" class="form-control">

        <button type="submit" class="btn btn-success">Invia</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Annulla</a>
    </form>

</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    
    <form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
        <label for="title">Titolo</label>
        <input type="text" name="title" value="{{ old('title') }}" class="form-control">

        <label for="category">Categoria</label>
        <input type="text" name="category" value="{{ old('category') }}" class="form-control">

        <label for="description">Descrizione</label>
        <input type="textarea" name="description" value="{{ old('description') }}" class="form-control">

        <label for="start_date">Data inizio</label>
        <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control">

        <label for="project_url">URL progetto</label>
        <input type="text" name="project_url" value="{{ old('project_url') }}" class="form-control">

        <button type="submit" class="btn btn-success">Invia</button>
        <button type="reset" class="btn btn-danger">Annulla</button>
    </form>

</div>

@endsection

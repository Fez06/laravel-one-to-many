@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li style="color:crimson"> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Crea un nuovo progetto!</h1>

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="title">Title</label>
    <input type="text" class='form-control' name="title" id="title" value="{{ old('title') }}">

    <label for="description">Description:</label>
    <input type="text" class='form-control' name="description" id="description" value="{{ old('description') }}">

    <label for="image">Inserisci un'immagine:</label>
    <input type="file" class='form-control' name="image" id="image">
    <br>
    <input type="submit" class='form-control' value="Aggiungi Progetto!">
</form>
    
@endsection
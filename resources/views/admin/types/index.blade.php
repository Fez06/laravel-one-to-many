@extends('layouts.app')

@section('content')
<h1>TYPE OF PROJECTS</h1>

@foreach ($types as $type)

<ul class="list-unstyled d-flex m-0 gap-1 justify-content">
    <li>
        <h2><a href="{{ route('admin.types.show', $types) }}" class="btn btn-sm btn-primary">{{$type->title}}</a></h2>
    </li>
    <li>
        <a href="{{ route('admin.types.edit', $types) }}"><button type="button" class="btn btn-sm btn-warning">Modifica</button></a>
    </li>
    <li>
        <form action="{{ route('admin.types.destroy', $types->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            
            <input type="submit" id="delete" value="Elimina" class="btn btn-sm btn-danger">
        </form>
    </li>
</ul>
 
@endforeach

<a href="{{ route('admin.types.create') }}"><button type="button">Crea un nuovo tipo di progetto</button></a>
    
@endsection
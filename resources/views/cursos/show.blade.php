@extends('layouts.plantilla')

@section('title', 'Curso '. $curso->name)
    
@section('content')
    <h1>Bienvenido al curso {{$curso->name}} </h1>


    <a href="{{route('cursos.edit', $curso)}}">Edit</a>

    <p>
        <strong>Categoria: </strong>{{$curso->categoria}}
    </p>

    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" style="color: rgb(16, 156, 191)">
            Eliminar
        </button>
    </form>
@endsection
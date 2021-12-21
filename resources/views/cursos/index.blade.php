@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')
    <h1>index from cursocontroller</h1>
    
    <a href="{{route('cursos.create')}}" style="color: rgb(16, 156, 191)">Crear curso</a>

    <ul>
        @foreach ($cursos as $curso)        
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a><br>
                
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection
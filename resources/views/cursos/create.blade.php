@extends('layouts.plantilla')

@section('title', 'Cursos create')
    
@section('content')
    <h1>create from cursocontroller";</h1>
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        
        <label for="">
            Nombre<br>
            <input type="text" name="name">
        </label>
        <br>
        <label for="">
            Descpripcion<br>
            <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
        </label>
        <br>
        <label for="">
            Categoria<br>
            <input type="text" name="categoria" id="">
        </label>

        <button type="submit">Send</button>
    </form>
@endsection
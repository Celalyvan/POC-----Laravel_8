@extends('layouts.plantilla')

@section('title', 'Cursos edit')
    
@section('content')
    <h1>Editando curso</h1>
    <form action="{{route('cursos.edit')}}" method="post">
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

        <button type="submit">Update</button>
    </form>
@endsection 
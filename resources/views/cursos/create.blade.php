@extends('layouts.plantilla')

@section('title', 'Cursos create')
    
@section('content')
    <h1>create from cursocontroller";</h1>
    
    
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        
        <label for="">
            Nombre<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label for="">
            Descpripcion<br>
            <textarea name="descripcion" id="" cols="30" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label for="">
            Categoria<br>
            <input type="text" name="categoria" id="" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <button type="submit" style="color: rgb(16, 156, 191)">Send</button>
    </form>
@endsection
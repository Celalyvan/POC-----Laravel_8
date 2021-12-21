@extends('layouts.plantilla')

@section('title', 'Cursos edit')
    
@section('content')
    <h1>Editando curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="post">
        @csrf
        @method('put')

        <label for="">
            Nombre<br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label for="">
            Descpripcion<br>
            <textarea name="descripcion" id="" cols="30" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label for="">
            Categoria<br>
            <input type="text" name="categoria" id="" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small style="color: red">*{{$message}}</small>
            <br>
        @enderror

        <button type="submit" style="color: rgb(16, 156, 191)" >Update</button>
    </form>
@endsection 
@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<br>
<h3>Editar curso</h3>
<form action="/docentes/{{$doc->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')

    @csrf
    <div class="form-group">
        <label for="nombre">Nombre del docente</label>
        <input name="nombre" value="{{$doc->nombre}}" type="text" id="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido del docente</label>
        <input name="apellido" value="{{$doc->apellido}}" type="textarea" id="apellido" class="form-control">
    </div>
    <div class="form-group">
        <label for="foto">Cargar foto</label>
        <br>
        <input name="foto" type="file" id="foto">
    </div>
    <div class="form-group">
        <label for="titulo">Titulo del docente</label>
        <input name="titulo" value="{{$doc->titulo}}" type="textarea" id="titulo" class="form-control">
    </div>
    <div class="form-group">
        <label for="cursoAsociado">Curso Asociado</label>
        <input name="cursoAsociado" value="{{$doc->cursoAsociado}}" type="textarea" id="cursoAsociado" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Modificar</button>
</form>


@endsection

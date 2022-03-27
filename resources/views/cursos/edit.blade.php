@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<br>
<h3>Editar curso</h3>
<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
   
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Editar Nombre del curso</label>
        <input name="nombre" value="{{$cursito->nombre}}" type="text" id="nombrecurso" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Editar Descripción del curso</label>
        <input name="descripcion" type="textarea" value="{{$cursito->descripcion}}" id="descripcion" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Actualizar imagen</label>
        <br>
        <input name="imagen" type="file" id="imagen">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>


@endsection
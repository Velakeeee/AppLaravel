{{--Para poder heerdar la plantilla necesito usar @extends--}}
@extends('layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')

<br>
<h3>Crear un nuevo curso</h3>
<form action="/cursos" method="POST" enctype="multipart/form-data">
    @if ($errors->any())
    @foreach ($errors->all() as $alerta)
        <div class="alert alert-danger" role="alert">
            <ul>
                <li>{{$alerta}}</li>
            </ul>
        </div>
    @endforeach
    @endif
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Nombre del curso</label>
        <input name="nombre" type="text" id="nombrecurso" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción del curso</label>
        <input name="descripcion" type="textarea" id="descripcion" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Cargar imagen</label>
        <br>
        <input name="imagen" type="file" id="imagen">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>


@endsection



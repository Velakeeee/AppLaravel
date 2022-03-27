{{--Para poder heerdar la plantilla necesito usar @extends--}}
@extends('layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')

<br>
<h3>Ingresar un nuevo docente</h3>
<form action="/docentes" method="POST" enctype="multipart/form-data">
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
        <label for="nombre">Nombre del docente</label>
        <input name="nombre" type="text" id="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="apellido">Apellido del docente</label>
        <input name="apellido" type="textarea" id="apellido" class="form-control">
    </div>
    <div class="form-group">
        <label for="foto">Cargar foto</label>
        <br>
        <input name="foto" type="file" id="foto">
    </div>
    <div class="form-group">
        <label for="titulo">Titulo del docente</label>
        <input name="titulo" type="textarea" id="titulo" class="form-control">
    </div>
    <div class="form-group">
        <label for="cursoAsociado">Curso Asociado</label>
        <input name="cursoAsociado" type="textarea" id="cursoAsociado" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>


@endsection



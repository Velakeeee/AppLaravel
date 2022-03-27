@extends('layouts.app')

@section('titulo', 'Detalle docente')

@section('contenido')

<div class="text-center">

    <img style="height: 30rem; width: 38rem" src="{{Storage::url($doc->foto)}}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text"><b>Docente:</b> {{$doc->nombre}}</p>
        <p class="card-text"><b>Apellido:</b> {{$doc->apellido}}</p>
        <p class="card-text"><b>Titulo:</b> {{$doc->titulo}}</p>
        <p class="card-text"><b>Curso Asociado:</b> {{$doc->cursoAsociado}}</p>
    </div>
    <a href="/docentes/{{$doc->id}}/edit" class="btn btn-primary">Editar info de docente</a>
</div>




@endsection

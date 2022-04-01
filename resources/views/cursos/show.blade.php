@extends('layouts.app')

@section('titulo', 'Detalle curso')

@section('contenido')

<div class="text-center">

    <img style="height: 30rem; width: 38rem" src="{{Storage::url($cursito->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text"><b>Descripción:</b> {{$cursito->descripcion}}</p>
        <p class="card-text"><b>Horas:</b> {{$cursito->horas}}</p>
    </div>
    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-primary">Editar curso</a>
    <br>
    <br>


    <form class="form-group" action="/cursos/{{$cursito->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">--Eliminar--</button>
    </form>


</div>






@endsection

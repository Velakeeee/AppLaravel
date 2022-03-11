@extends('layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')

    <center><h1>Lista de Cuuursos</h1></center>
    <br>
    {{--foreache es un bucle especial para trabajar arrays--}}
    <div class="row"> {{--Ya tenemos la fila--}}
    @foreach ( $cursito as $alias )
        {{--Para llamar informacion de php basta con interpolar las variables
            usando la doble llave--}}

            <div class="col-sm"> {{--abrimos columnas--}}
                <div class="card" style="width: 18rem; margin-top: 4rem">
                <img style="height: 10rem; width: 17.9rem" src="{{Storage::url($alias->imagen)}}" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$alias->nombre}}</h5>
                    <p class="card-text"><b>Descripcion:</b> {{$alias->descripcion}}</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>

    @endforeach
    </div>
@endsection

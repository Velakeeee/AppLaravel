{{--Para poder heerdar la plantilla necesito usar @extends--}}
@extends('layouts.app')

@section('titulo', 'Crear registro')

@section('contenido')

<br>
<h3>Crear un nuevo curso</h3>
<form action="/cursos" method="POST" enctype="multipart/form-data">
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

{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <title>Vista de registros</title>
    </head>
    <body>
        {{--Bootstrap requiere un div container para mostrar
            Los elementos centrados y ordenados--}}
{{--
        <div class="container">
            <br>
            <h3>Crear un nuevo curso</h3>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del curso</label>
                    <input name="nombre" type="text" id="nombrecurso" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción del curso</label>
                    <input name="descripcion" type="textarea" id="descripcion" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Crear</button>
            </form>

        </div>
    </body>
</html>

--}}

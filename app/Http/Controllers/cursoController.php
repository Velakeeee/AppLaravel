<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;
use App\Http\Requests\storecursosRequest;


class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular
        //información de la tabla cursos, a su vez el array actuara como un objeto
        $cursito = curso::all();
        //el metodo compact pide un parametro el cual sera nuestro array
        //llamado cursito y va acompañado la vista que estamos llamando
        return view ('cursos.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storecursosRequest $request)
    {
        //con el metodo all() veo toda la información
        //return $request->all();
        //obtuvimos el dato de lo que el usuario envia por el input
        //return $request->input('descripcion');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto me permitira manipular la tabla
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');
        $cursito->horas = $request->input('horas');

        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        //con esto ejecutamos el comando para guardar
        $cursito->save();
        return 'guardao pa';
    }

    /**
     * Muestra el recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //creo un array con informacion del registro
        // del id que viajó en la solicitud
        $cursito = curso::find($id);
        //asocio el array al view usando el compact
        return view('cursos.show',compact('cursito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = curso::find($id);
        return view('cursos.edit',compact('cursito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cursito = curso::find($id);
        $cursito->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public');
        }
        $cursito -> save();
        return'arriba españa';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cursito = curso::find($id);

       $urlImagenBD = $cursito->imagen;
       //return $urlImagenBD;
       $nombreImagen = str_replace('public/cursos/','\storage\cursos\\',$urlImagenBD);
       $rutaCompleta = public_path().$nombreImagen;
       //return $rutaCompleta;
       unlink($rutaCompleta);
       $cursito->delete();
       return 'Eliminado epikamente';
    }
}

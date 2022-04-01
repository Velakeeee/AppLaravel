<?php

namespace App\Http\Controllers;
use App\Models\docente;
use Illuminate\Http\Request;
use App\Http\Requests\storedocenteRequest;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = docente::all();
        return view ('docentes.index',compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storedocenteRequest $request)
    {
        $doc = new docente();
        //esto me permitira manipular la tabla
        $doc->nombre = $request->input('nombre');
        $doc->apellido = $request->input('apellido');
        if ($request->hasFile('foto')){
            $doc->foto = $request->file('foto')->store('public/docentes');
        }
        $doc->titulo = $request->input('titulo');
        $doc->cursoAsociado = $request->input('cursoAsociado');
        //con esto ejecutamos el comando para guardar
        $doc->save();
        return 'guardao pa';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doc = docente::find($id);
        //asocio el array al view usando el compact
        return view('docentes.show',compact('doc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = docente::find($id);
        return view('docentes.edit',compact('doc'));
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
        $doc = docente::find($id);
        $doc->fill($request->except('foto'));
        if ($request->hasFile('foto')){
            $doc->foto = $request->file('foto')->store('public');
        }
        $doc -> save();
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
        $doc = docente::find($id);

        $urlImagenBD = $doc->foto;
        //return $urlImagenBD;
        $nombreImagen = str_replace('public/docentes/','\storage\docentes\\',$urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        //return $rutaCompleta;
        //unlink($rutaCompleta);
        //$doc->delete();
        return 'Eliminado epikamente';
    }
}

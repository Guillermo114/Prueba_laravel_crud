<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Grupo;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=Estudiante::all();
        $grupos=Grupo::all();

        return view('estudiante.index',compact('estudiantes', 'grupos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $estudiantes=new Estudiante;
        
        $estudiantes->nombre=$request->input('nombre');
        $estudiantes->apellido_paterno=$request->input('apellido_paterno');
        $estudiantes->apellido_materno=$request->input('apellido_materno');
        $estudiantes->edad=$request->input('edad');
        $estudiantes->email=$request->input('email');
        $estudiantes->teléfono=$request->input('teléfono');
        $estudiantes->id_grupo=$request->input('id_grupo');
        $estudiantes->save();
        return redirect()->back();
        
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantes=Estudiante::find($id);
        $estudiantes->nombre=$request->input('nombre');
        $estudiantes->apellido_paterno=$request->input('apellido_paterno');
        $estudiantes->apellido_materno=$request->input('apellido_materno');
        $estudiantes->edad=$request->input('edad');
        $estudiantes->email=$request->input('email');
        $estudiantes->teléfono=$request->input('teléfono');
          $estudiantes->id_grupo=$request->input('id_grupo');
        $estudiantes->update();
        return redirect()->back();
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiantes=Estudiante::find($id);
        $estudiantes->id_grupo=$request->input('id_grupo');
        
        $estudiantes->delete();
        return redirect()->back();
    }
}

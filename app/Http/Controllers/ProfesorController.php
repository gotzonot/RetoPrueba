<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesor;

class ProfesorController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores=profesor::all();
        return view('Profesor.index',compact('profesores')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$this->validate($request,['departamento'=>'required', 'nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required', 'admin'=>'required']);
        $profesor= new profesor;
        $profesor->nombreapellidos=$request->input('nombreapellidos');
        $profesor->dni=$request->input('dni');
        $profesor->email=$request->input('email');
        $profesor->password=$request->input('password');
        $profesor->direccion=$request->input('direccion');
        $profesor->ciudad=$request->input('ciudad');
        $profesor->telefono=$request->input('telefono');
        $profesor->departamento=$request->input('departamento');
        $profesor->admin=$request->input('admin');
        $profesor->save();
        
         return view('Profesor/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $profesores=Profesor::find($id);
        return  view('Profesor.show',compact('profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesores=Profesor::find($id);
        return view('profesor.edit',compact('oferta'));
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
        $this->validate($request,['departamento'=>'required', 'nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required', 'admin'=>'required']);
        Profesor::find($id)->update($request->all());
        return redirect()->route('profesor.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profesor::find($id)->delete();
        return redirect()->route('profesor.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
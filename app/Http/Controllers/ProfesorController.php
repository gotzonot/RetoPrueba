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
        $profesores=profesor::all()->where('baja',0);
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
        
        $profesores=profesor::all();
        return redirect('profesor/index');
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
        return view('Profesor.edit',compact('profesores'));
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
        // $this->validate($request,['nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required']);
        $profesor=Profesor::find($request->id);
        $profesor->nombreapellidos=$request->input('nombreapellidos');
        $profesor->dni=$request->input('dni');
        $profesor->email=$request->input('email');
        $profesor->direccion=$request->input('direccion');
        $profesor->ciudad=$request->input('ciudad');
        $profesor->telefono=$request->input('telefono');
        $profesor->save();

        $profesor=profesor::all();
        return redirect('profesor/index');
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
        $profesores=profesor::all();
        return redirect('profesor/index');
    }

    public function desactivar(Request $request){

        $profesor=Profesor::find($request->id);
        $profesor->update(['baja' => 1]);
        
        $profesor=profesor::all();
        return redirect('profesor/index');

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumno;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=alumno::all()->where('baja',0);
        return view('Alumno.index',compact('alumnos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$this->validate($request,['nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required']);
        $alumno= new alumno;
        //$alumno->foto=$request->input('foto')->move("images");
        $alumno->nombreapellidos=$request->input('nombreapellidos');
        $alumno->dni=$request->input('dni');
        $alumno->email=$request->input('email');
        $alumno->password=Hash::make($request->input('password'));
        $alumno->direccion=$request->input('direccion');
        $alumno->ciudad=$request->input('ciudad');
        $alumno->telefono=$request->input('telefono');
        $alumno->save();

        $alumnos=alumno::all();
        return redirect('alumno/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos=Alumno::find($id);
        return  view('Alumno.show',compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos=Alumno::find($id);
        return view('Alumno.edit',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // $this->validate($request,['nombreApellidos'=>'required', 'dni'=>'required', 'email'=>'required', 'password'=>'required']);
        $alumno=Alumno::find($request->id);
        //$alumno->foto=$request->input('foto')->move("images");
        $alumno->nombreapellidos=$request->input('nombreapellidos');
        $alumno->dni=$request->input('dni');
        $alumno->email=$request->input('email');
        
        $alumno->direccion=$request->input('direccion');
        $alumno->ciudad=$request->input('ciudad');
        $alumno->telefono=$request->input('telefono');
        $alumno->save();

        $alumnos=alumno::all();
        return redirect('alumno/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        $alumnos=alumno::all();
        return redirect('alumno/index');
}
    public function desactivar(Request $request){

        $alumno=Alumno::find($request->id);
        $alumno->update(['baja' => 1]);
        $alumnos=alumno::all();
        return redirect('alumno/index');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oferta;

class OfertaController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas=Oferta::all();
        return view('Oferta.index',compact('ofertas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Oferta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['titulo'=>'required', 'empresa'=>'required', 'localizacion'=>'required', 'sector'=>'required', 'descripcion'=>'required', 'funciones'=>'required', 'requisitos'=>'required',]);
        Curriculum::create($request->all());
        return redirect()->route('oferta.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $ofertas=Oferta::find($id);
       return  view('Oferta.show', compact('ofertas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofertas=Oferta::find($id);
        return view('oferta.edit',compact('oferta'));
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
        $this->validate($request,['titulo'=>'required', 'empresa'=>'required', 'localizacion'=>'required', 'sector'=>'required', 'descripcion'=>'required', 'funciones'=>'required', 'requisitos'=>'required',]);
        Oferta::find($id)->update($request->all());
        return redirect()->route('oferta.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oferta::find($id)->delete();
        return redirect()->route('oferta.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

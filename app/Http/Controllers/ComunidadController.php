<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\ActividadDisponible;
use EtniasPeru\Comunidad;
use Illuminate\Http\Request;

class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidades = Comunidad::all();
        return view('page.comunidad',compact('comunidades'));
    }
    public function show($titulo)
    {
        $titulo = str_replace('-', ' ', $titulo);
        $rango_min = 2;
        $rango_max = 2;
        $comunidad = Comunidad::with('fotos','asociaciones')->where('nombre', $titulo)->get();
        $comunidad_pack = Comunidad::with([
                'fotos',
                'asociaciones.actividades',
                'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);}]
        )->where('nombre', $titulo)->get();
        $disponibilidad = ActividadDisponible::where('estado',1)->get()->unique('actividad_id');
        return view('page.comunidad-show', compact('comunidad','comunidad_pack','disponibilidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

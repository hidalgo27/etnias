<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Categoria;
use EtniasPeru\Comunidad;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = 1;
        $rango_min = 2;
        $rango_max = 2;
        $categoria = Categoria::all();
        $comunidad_huilloc = Comunidad::with([
            'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);},
            'asociaciones.actividades.disponibilidad'=>function ($query) use ($estado) {$query->where('estado',$estado);}
            ])->where('nombre', 'HUILLOC')->get();
        $comunidad_taucca = Comunidad::with(['asociaciones.actividades.disponibilidad'=>function ($query) use ($estado) {$query->where('estado',$estado);}])->where('nombre', 'TAUCCA')->get();
        $comunidad_amaru = Comunidad::with(['asociaciones.actividades.disponibilidad'=>function ($query) use ($estado) {$query->where('estado',$estado);}])->where('nombre', 'AMARU')->get();

        return view('page.home', compact('comunidad_huilloc', 'comunidad_taucca','comunidad_amaru','categoria'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

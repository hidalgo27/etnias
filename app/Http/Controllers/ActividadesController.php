<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\ActividadDisponible;
use EtniasPeru\Categoria;
use EtniasPeru\Comunidad;
use Illuminate\Http\Request;

class ActividadesController extends Controller
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
//        $comunidad = Comunidad::with([
//            'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);},
//            'asociaciones.actividades.disponibilidad'=>function ($query) use ($estado) {$query->where('estado',$estado);}
//        ])->get();

        $disponibilidad = ActividadDisponible::where('estado',1)->get()->unique('actividad_id');

        $comunidad = Comunidad::with([
                'asociaciones.actividades',
                'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);}]
        )->get();

        return view('page.actividades', compact('categoria','comunidad','disponibilidad'));
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
    public function show($category)
    {
        $category = str_replace('-', ' ', $category);
        $estado = 1;
        $rango_min = 2;
        $rango_max = 2;
        $categoria = Categoria::all();

        $disponibilidad = ActividadDisponible::where('estado',1)->get()->unique('actividad_id');


        $comunidad = Comunidad::with([
                'asociaciones.actividades'=>function ($query) use ($category) {$query->where('categoria',$category);},
                'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);}]
        )->get();

        return view('page.actividades-category-show', compact('categoria','comunidad','category','disponibilidad'));
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

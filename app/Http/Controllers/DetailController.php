<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Actividad;
use EtniasPeru\ActividadDisponible;
use EtniasPeru\ActividadPrecio;
use EtniasPeru\Comunidad;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($titulo)
    {
        $titulo = str_replace('-', ' ', $titulo);
        $id_actividad = Actividad::where('titulo',$titulo)->get();
        foreach ($id_actividad as $id_actividades){
            $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividades->id)->get();
            $disponibilidad_a = ActividadDisponible::where('actividad_id', $id_actividades->id)->where('estado', 1)->get();
        }

        $estado = 1;
        $rango_min = 2;
        $rango_max = 2;
        $comunidad = Comunidad::with([
            'distrito',
            'asociaciones.actividades'=>function ($query) use ($titulo) {$query->where('titulo',$titulo);},
            'asociaciones.actividades.precios'=>function ($query) use ($rango_min, $rango_max) {$query->where('min',$rango_min)->where('max',$rango_max);}
        ])->get();

        return view('page.detail', compact('comunidad','precio_actividad','disponibilidad_a'));
    }

    public function date($titulo, $fecha, $pasajeros)
    {
        $titulo = str_replace('-', ' ', $titulo);
        $id_actividad = Actividad::where('titulo',$titulo)->get();
        foreach ($id_actividad as $id_actividades){
            $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividades->id)->get();
            $disponibilidad_a = ActividadDisponible::where('actividad_id', $id_actividades->id)->where('estado', 1)->get();
        }

        $estado = 1;
        $rango_min = $pasajeros;
        $rango_max = 2;
        $comunidad = Comunidad::with([
            'distrito',
            'asociaciones.actividades'=>function ($query) use ($titulo) {$query->where('titulo',$titulo);},
            'asociaciones.actividades.precios'=>function ($query) use ($rango_min) {$query->where('min','<=',$rango_min)->where('max','>=',$rango_min);}
        ])->get();

        return view('page.detail-date', compact('comunidad','precio_actividad','disponibilidad_a','precio_actividad_ver','rango_min','fecha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_price(Request $request)
    {
        $id_actividad = $request->input('id_actividad');
        $personas = $request->input('txt_personas');
//        $number
        $comision = Actividad::with('asociacion')->where('id', $id_actividad)->get();
        foreach ($comision as $comisiones){
            $comision = $comisiones->asociacion->comision;
        }
        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->get();
        foreach ($precio_actividad as $precio_actividades){
            $precio = $precio_actividades->precio;
        }
        $total = $precio + ($precio * $comision)/100;
//        echo $precio.'+'.$precio.'*'.$comision.'/100'.$precio*$comision;
        return round($total);
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

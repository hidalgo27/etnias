<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Actividad;
use EtniasPeru\ActividadPrecio;
use EtniasPeru\Comida;
use EtniasPeru\ComidaPrecio;
use EtniasPeru\Guia;
use EtniasPeru\Transporte;
use EtniasPeru\TransportePrecio;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_actividad = $request->input('id_actividad');
        $fecha_viaje = $request->input('fecha_viaje');
        $personas = $request->input('txt_personas');

        $actividad = Actividad::where('id', $id_actividad)->get();

        $comision = Actividad::with('asociacion')->where('id', $id_actividad)->get();
        foreach ($comision as $comisiones){
            $comision = $comisiones->asociacion->comision;
        }
        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->get();

        foreach ($precio_actividad as $precio_actividades){
            $precio = $precio_actividades->precio;
        }

        $total = $precio + ($precio * $comision)/100;

        $comida = Comida::all();
        $comidas = ComidaPrecio::where('categoria', "Extranjero")->where('min','<=',$personas)->where('max','>=',$personas)->get();
        foreach ($comidas as $precio_comidas) {
            $precio_desayuno = $precio_comidas->precio;
        }

        $transporte = Transporte::all();
        $transportes = TransportePrecio::where('categoria', "Extranjero")->where('min','<=',$personas)->where('max','>=',$personas)->get();
        foreach ($comidas as $precio_comidas) {
            $precio_desayuno = $precio_comidas->precio;
        }

        $guia = Guia::where('departamento_id', "8")->where('min','<=',$personas)->where('max','>=',$personas)->get();

        return view('page.book',compact('actividad','fecha_viaje','total','$precio_desayuno','comida','comidas','transporte','transportes','guia','personas'));
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

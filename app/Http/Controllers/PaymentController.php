<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Actividad;
use EtniasPeru\Comida;
use EtniasPeru\ComidaPrecio;
use EtniasPeru\Guia;
use EtniasPeru\TransportePrecio;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_actividad = $request->input('txt_actividad_id');
        $fecha_viaje = $request->input('txt_fecha_viaje');
        $personas = $request->input('txt_personas');
        $actividad = Actividad::where('id', $id_actividad)->get();

        $comida_precio = ComidaPrecio::all();
        $comida = $request->input('comida');

        $transporte_precio = TransportePrecio::all();
        $transporte = $request->input('transporte');

        $guia = Guia::all();
        $guias = $request->input('guia');
        return view('page.payment', compact('actividad','fecha_viaje','personas', 'comida', 'comida_precio','transporte_precio','transporte','guia','guias'));
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

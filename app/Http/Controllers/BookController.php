<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Actividad;
use EtniasPeru\ActividadPrecio;
use EtniasPeru\Asociacion;
use EtniasPeru\Comida;
use EtniasPeru\ComidaPrecio;
use EtniasPeru\Guia;
use EtniasPeru\HospedajePrecio;
use EtniasPeru\Transporte;
use EtniasPeru\TransporteExterno;
use EtniasPeru\TransportePrecio;
use function foo\func;
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

        $actividad = Actividad::find($id_actividad);

        $comision = Actividad::with('asociacion')->where('id', $id_actividad)->get();
        foreach ($comision as $comisiones){
            $comision = $comisiones->asociacion->comision;
        }
        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->first();
        if (isset($precio_actividad)){
            $precio = $precio_actividad->precio;
            $total = $precio + ($precio * $comision)/100;
        }else{
            return back()->withInput()->with('status', 'No tenemos precios para '.$personas.' personas.');
        }

//        $comida = Comida::where('asociacion_id', $actividad->asociacion->id)->get();
        $asocicion_id = $actividad->asociacion->id;
        $comidas_precio = ComidaPrecio::with(['comida'=>function($query) use ($asocicion_id) {$query->where('asociacion_id', $asocicion_id)->get();}])->where('categoria', "Extranjero")->where('min','<=',$personas)->where('max','>=',$personas)->get();

        $hospedaje_precio = HospedajePrecio::with(['hospedaje'=>function($query) use ($asocicion_id) {$query->where('asociacion_id', $asocicion_id)->get();}])->where('categoria', "Extranjero")->where('min','<=',$personas)->where('max','>=',$personas)->get();

        $transportes = TransporteExterno::where('comunidad_id', $actividad->asociacion->comunidad->id)->where('min','<=',$personas)->where('max','>=',$personas)->get();

        $id_departamento = $actividad->asociacion->comunidad->distrito->provincia->departamento->id;

        $guia = Guia::where('departamento_id', $id_departamento)->where('min','<=',$personas)->where('max','>=',$personas)->get();

//        return redirect()->route('book_get_path', compact('actividad','fecha_viaje','total','hospedaje_precio','comidas_precio','transportes','guia','personas'));

        return view('page.book')->with(compact('actividad','fecha_viaje','total','hospedaje_precio','comidas_precio','transportes','guia','personas'));
    }

    public function index2()
    {
        echo "hola";
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

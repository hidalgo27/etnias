<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Asociacion;
use EtniasPeru\Comunidad;
use EtniasPeru\Departamento;
use EtniasPeru\Distrito;
use EtniasPeru\Provincia;
use EtniasPeru\SolicitudesAsociacion;
use EtniasPeru\SolicitudesOtros;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index(){
        return view('page.join-our');
    }
    public function comunidad(){
        $departamentos =Departamento::get();
        $provincias =Provincia::get();
        $distritos =Distrito::get();
        $comunidades = Comunidad::get();
        $asociaciones=Asociacion::all();
        return view('page.join-comunidad',compact('asociaciones','departamentos','provincias','distritos','comunidades'));
    }
    public function transportista(){
        $departamentos =Departamento::get();
        return view('page.join-transport', compact('departamentos'));
    }
    public function guia(){
        $departamentos =Departamento::get();
        return view('page.join-guia', compact('departamentos'));
    }

    public function guia_post(Request $request){
        $join_guia = new SolicitudesOtros();

        $join_guia->departamento_id = $request->input('departamento');
        $join_guia->provincia_id = $request->input('provincia');
        $join_guia->distrito_id = $request->input('distrito');

        $join_guia->nombre = $request->input('txt_nombre');
        $join_guia->categoria = "guia";
        $join_guia->perfil_linkedin = $request->input('txt_perfil');
        $join_guia->email = $request->input('txt_email');
        $join_guia->telefono = $request->input('txt_telefono');
        $join_guia->estado = 0;
        $join_guia->save();
        return redirect('trabaja-con-nosotros/guia')->with('status', 'Su solicitud ha sido enviado correctamente. Nuestro equipo se pondrá en contacto con usted en las próximas horas.');
    }

    public function transporte_post(Request $request){
        $join_guia = new SolicitudesOtros();

        $join_guia->departamento_id = $request->input('departamento');
        $join_guia->provincia_id = $request->input('provincia');
        $join_guia->distrito_id = $request->input('distrito');

        $join_guia->nombre = $request->input('txt_nombre');
        $join_guia->categoria = "transporte";
        $join_guia->email = $request->input('txt_email');
        $join_guia->telefono = $request->input('txt_telefono');
        $join_guia->estado = 0;
        $join_guia->save();
        return redirect('trabaja-con-nosotros/transportista')->with('status', 'Su solicitud ha sido enviado correctamente. Nuestro equipo se pondrá en contacto con usted en las próximas horas.');
    }

    public function comunidad_post(Request $request){

        $join_comunidad = new SolicitudesAsociacion();

        $join_comunidad->departamento_id = $request->input('departamento');
        $join_comunidad->provincia_id = $request->input('provincia');
        $join_comunidad->distrito_id = $request->input('distrito');
        $join_comunidad->comunidad_id = $request->input('comunidad');
        $join_comunidad->comunidad = $request->input('txt_otra_comunidad');

//        $join_comunidad->nombre = $request->input('txt_nombre');
        $join_comunidad->nombre_representante = $request->input('txt_representante');
        $join_comunidad->email = $request->input('txt_email');
        $join_comunidad->telefono = $request->input('txt_telefono');

//        $join_comunidad->email = $request->input('txt_nombre');

        $join_comunidad->ubicacion = $request->input('txt_ubicacion');
        $join_comunidad->distancia_poblacion_cercana = $request->input('txt_distancia');
        $join_comunidad->transporte = $request->input('rdo_transporte');
        $join_comunidad->transporte_costo = $request->input('costo_acceder');
        $join_comunidad->operador_celular = $request->input('operador');
        $join_comunidad->hospedaje_nro_viviendas = $request->input('txt_cantidad_viviendas');

        $join_comunidad->hospedaje_tiene_individuales = $request->input('rdo_cuartos_i');
        $join_comunidad->hospedaje_tiene_individuales_nro = $request->input('txt_habitaciones');
        $join_comunidad->hospedaje_tiene_comunales = $request->input('rdo_cuartos');
        $join_comunidad->hospedaje_tiene_comunales_nro_camas = $request->input('txt_camas');

        $join_comunidad->servicios_basicos = $request->input('rdo_servicios');
        $join_comunidad->acceso_internet = $request->input('rdo_internet');
        $join_comunidad->artesania = $request->input('rdo_artesania');
        $join_comunidad->textileria = $request->input('rdo_textil');
        $join_comunidad->yanapacuy = $request->input('rdo_yana');
        $join_comunidad->alimentacion = $request->input('rdo_alimentacion');
        $join_comunidad->yachaywasi = $request->input('rdo_yachay');
        $join_comunidad->chasqui = $request->input('rdo_chaski');
        $join_comunidad->otros = $request->input('txt_otros');
        $join_comunidad->estado = 0;
        $join_comunidad->save();

        return redirect('trabaja-con-nosotros/comunidad')->with('status', 'Su solicitud ha sido enviado correctamente. Nuestro equipo se pondrá en contacto con usted en las próximas horas.');
    }

    public function mostrarProvincias(Request $request){

        $categoria_id=$request->categoria_id;
        $producto_id=$request->producto_id;
        if($request->ajax()){
            $provincias = Provincia::where('departamento_id',$request->departamento_id)->get();
            $data = view('layouts.page.mostrar-provincias-ajax',compact('provincias','categoria_id','producto_id'))->render();
            return \Response::json(['options'=>$data]);
        }
    }
    public function mostrarDistritos(Request $request){
        if($request->ajax()){
            $distritos = Distrito::where('provincia_id',$request->provincia_id)->get();
            $data = view('layouts.page.mostrar-distritos-ajax',compact('distritos'))->render();
            return \Response::json(['options'=>$data]);
        }
    }

    public function mostrarComunidades(Request $request){
        if($request->ajax()){
            $comunidades = Comunidad::where('distrito_id',$request->distrito_id)->get();
            $data = view('layouts.page.mostrar-comunidades-ajax',compact('comunidades'))->render();
            return \Response::json(['options'=>$data]);
        }
    }
}

<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Reserva;
use EtniasPeru\ReservaEncuesta;
use Illuminate\Http\Request;

class ValuationController extends Controller
{
    public function index(){
        return view('page.valuation');
    }
    public function index_id($id){
        $id=base64_decode($id);
        $reserva=Reserva::find($id);
        return view('page.valuation-valor',compact('reserva'));
    }
    public function guardar_encuesta(Request $request ){
        $encuestas=$request->input('encuestas');
        foreach ($encuestas as $encuesta){
            $id_estado=explode('_',$encuesta);
            if($id_estado[1]=='1') {
                $rpt = $request->input('options_' . $id_estado[0]);
                $r_encuesta=ReservaEncuesta::find($id_estado[0]);
                $r_encuesta->valoracion=$rpt;
                $r_encuesta->save();
            }
            elseif($id_estado[1]=='0'){
                $rpt = $request->input('pregunta_texto_' . $id_estado[0]);
                $r_encuesta=ReservaEncuesta::find($id_estado[0]);
                $r_encuesta->valoracion=$rpt;
                $r_encuesta->save();
            }
        }

        $reserva_id=$request->input('reserva_id');
        $reserva=Reserva::find($reserva_id);
        $reserva->estado_encuesta=2;
        $reserva->save();
        /*$preguntas=$request->input('preguntas');
        $pregunta_texto_id=$request->input('pregunta_texto_id');
        $pregunta_texto=$request->input('pregunta_texto');
        if(isset($preguntas)){
            foreach($preguntas as $pregunta){
                $pregunta_=explode('_',$pregunta);
                $encuesta=ReservaEncuesta::find($pregunta_[0]);
                $encuesta->valoracion=$pregunta_[1];
                $encuesta->save();
            }
        }
        if(isset($pregunta_texto_id)){
            $encuesta=ReservaEncuesta::find($pregunta_texto_id);
            $encuesta->valoracion=$pregunta_texto;
            $encuesta->save();
        }*/
        return redirect()->back()->with('success','Encuesta enviada.');
    }
}

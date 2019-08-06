<?php
namespace EtniasPeru\Helpers;

use EtniasPeru\Reserva;

class MisFunciones{
    public static function fecha_peru($fecha){
        if(trim($fecha)!=''){
            $fecha=explode('-',$fecha);
            return $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }
    }
    public static function fecha_peru_hora($fecha_hora){
        if(trim($fecha_hora)!=''){
            $f1=explode(' ',$fecha_hora);
            $hora=$f1[1];
            $f2=explode('-',$f1[0]);
            $fecha1=$f2[2].'-'.$f2[1].'-'.$f2[0];
            return $fecha1.' a las '.$hora;
        }
    }
    public static function fecha_peru_hora_nros($fecha_hora){
        if(trim($fecha_hora)!=''){
            $f1=explode(' ',$fecha_hora);
            $hora=$f1[1];
            $f2=explode('-',$f1[0]);
            $fecha1=$f2[2].'-'.$f2[1].'-'.$f2[0];
            return $fecha1.' '.$hora;
        }
    }

    public static function fecha_string($fecha){
        if(trim($fecha)!=''){
            $fecha=explode('-',$fecha);
            return $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
        }
    }
    // public static function generar_codigo($web)
    // {
    //     $precodigo=array();
    //     $webs=Web::get();
    //     foreach($webs as $items){
    //         $precodigo[$items->pagina]=$items->pre;
    //     }
    //     // $nro_codigo=Cotizacion::where('web',$web)->count()+1;
    //     $nro_codigo=0;
    //     if(Cotizacion::where('web',$web)->orderBy('id', 'DESC')->count()>0){
    //         $codigo_db =Cotizacion::where('web',$web)->orderBy('id', 'DESC')->first()->codigo;
    //         $nro_codigo = str_replace($precodigo[$web], "", $codigo_db);
    //     }
    //     // $codigoo=$codigo_db ->last()->pluck('codigo');

    //     $nro=intval($nro_codigo)+1;
    //     $codigo=$precodigo[$web].$nro;
    //     return $codigo;
    // }
    public static function nuevo_codigo($pre,$nro_ceros_maximo)
    {
        $reservas=Reserva::where('codigo','like',$pre.'%')->get()->sortByDesc("id")->first();
// dd($reservas);

        // // return $codigo;
        $codigo_int=1;
        if(isset($reservas)){
            $codigo=$reservas->codigo;
            if(strlen(trim($codigo))>0){
                $codigo_int=intval($codigo);
                $codigo_int++;
                // $long=strlen($codigo_int);
                // $long_ceros=$nro_ceros_maximo-$long;
                // for($i=1;$i<=$long_ceros;$i++){
                //     $pre.='0';
                // }
                return $codigo_int;
            }
            else{
                for($i=1;$i<$nro_ceros_maximo;$i++){
                    $pre.='0';
                }
                return $pre.$codigo_int;
            }
        }
        else{
            for($i=1;$i<$nro_ceros_maximo;$i++){
                $pre.='0';
            }
            return $pre.$codigo_int;
        }
        // return $nro_ceros_maximo;
    }
}

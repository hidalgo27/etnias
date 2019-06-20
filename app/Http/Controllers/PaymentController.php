<?php

namespace EtniasPeru\Http\Controllers;

use Carbon\Carbon;
use EtniasPeru\Guia;
use EtniasPeru\User;
use EtniasPeru\Comida;
use EtniasPeru\Reserva;
use EtniasPeru\RoleUser;
use EtniasPeru\Actividad;
use EtniasPeru\ReservaGuia;
use EtniasPeru\ComidaPrecio;
use Illuminate\Http\Request;
use EtniasPeru\ReservaComida;
use EtniasPeru\ActividadPrecio;
use EtniasPeru\HospedajePrecio;
use EtniasPeru\ReservaActividad;
use EtniasPeru\ReservaHospedaje;
use EtniasPeru\TransportePrecio;
use EtniasPeru\TransporteExterno;
use EtniasPeru\Helpers\PasarelaVisa;
use Illuminate\Support\Facades\Auth;
use EtniasPeru\ReservaTransporteExterno;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $redirectTo = '/client/home';

    public function index(Request $request)
    {
        $id_actividad = $request->input('txt_actividad_id');
        $fecha_viaje = $request->input('txt_fecha_viaje');
        $personas = $request->input('txt_personas');
        $actividad = Actividad::with('precios','asociacion')->where('id', $id_actividad)->get();
        $total=0;
        $comision=0;
        foreach ($actividad as $comisiones){
            $comision = $comisiones->asociacion->comision;
        }
        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->first();
        if (isset($precio_actividad)){
            $precio = $precio_actividad->precio;
            $total = $precio + ($precio * $comision)/100;
        }else{
            return back()->withInput()->with('status', 'No tenemos precios para '.$personas.' personas.');
        }
//        $comida_precio = ComidaPrecio::all();
//        $comida = $request->input('comida');
        $pre_total=0;
        $comida_precio=[];
        $comida_arr=[];
        if ($request->has('comida')){
            $comida_arr = $request->input('comida');
            $i=0;
            foreach ($comida_arr as $comida_a){
                $comida_id = explode('-', $comida_a);
                $comida_precio[$i] = ComidaPrecio::find($comida_id[0]);
                $pre_total+=round($comida_precio[$i]->precio);
                $i++;
            }
        }
        $transporte_precio=[];
        if ($request->has('transporte')){
            $transporte_arr = $request->input('transporte');
            $j=0;
            foreach ($transporte_arr as $transporte_a){
                $transporte_id = explode('-', $transporte_a);
                $transporte_precio[$j] = TransporteExterno::find($transporte_id[0]);
                $pre_total+=round($transporte_precio[$j]->precio);
                $j++;
            }
        }
        $hospedaje_precio=[];
        if ($request->has('hospedaje')){
            $hospedaje_arr = $request->input('hospedaje');
            $k=0;
            foreach ($hospedaje_arr as $hospedaje_a){
                $hospedaje_id = explode('-', $hospedaje_a);
                $hospedaje_precio[$k] = HospedajePrecio::find($hospedaje_id[0]);
                $pre_total+=round($hospedaje_precio[$k]->precio);
                $k++;
            }
        }
        $guia_precio=[];
        if ($request->has('guia')){
            $guia_arr = $request->input('guia');
            $l=0;
            foreach ($guia_arr as $guia_a){
                $guia_id = explode('-', $guia_a);
                $guia_precio[$l] = Guia::find($guia_id[0]);
                $pre_total+=round($guia_precio[$l]->precio);
                $l++;
            }
        }

    //-- creamos l asesion para la pasarela
        if ($total>0){
            $pasarela=new PasarelaVisa();
            // $entorno = $_POST['entorno'];
            $entorno ="dev";
            $usr = '';
            $pwd = '';

            switch ($entorno) {
                case 'dev':
                    $usr = $pasarela->usrtest();
                    $pwd = $pasarela->pwdtest();
                    break;
                case 'prd':
                    $usr = $pasarela->usr();
                    $pwd = $pasarela->pwd();
                    break;
            }
            // echo $entorno;
            // $amount = $_POST['amount'];

            $amount = (round($total)+$pre_total) * $personas;

            // dd("entorno:$entorno,amount:$usr,key:$pwd");
            $key = $pasarela->securitykey($entorno,$usr,$pwd);
            setcookie("key",$key);
            // session('key', $key);
            // echo "Sessi&oacute;n Key: ",
            // dd("entorno:$entorno,amount:$amount,key:$key");

            $sessionToken = $pasarela->create_token($entorno,$amount,$key);
            $nombre='';
            $apellido='';
            $email='';
            if (isset($_POST['nombre'])){
                    $nombre=$_POST['nombre'];
                }else{
                    $nombre="";
                }
                if (isset($_POST['apellido'])){
                    $apellido=$_POST['apellido'];
                }else{
                    $apellido="";
                }
                if (isset($_POST['email'])){
                    $email=$_POST['email'];
                }else{
                    $email="";
                }
                $userTokenId="";
                if (isset($_POST['userTokenId'])){
                    $userTokenId=$_POST['userTokenId'];
                }else{
                    $userTokenId="";
                }
                if (isset($_POST['_token'])){
                    $userTokenId=$_POST['_token'];
                }else{
                    $userTokenId="";
                }

            // $arrayPost = array("sessionToken"=>$sessionToken,"amount"=>$amount,"nombre"=>$nombre,"apellido"=>$apellido,"email"=>$email,"userTokenId"=>$userTokenId,"entorno"=>$entorno,"key"=>$key);
            // $url = "boton.php";
            // echo "<hr><pre>";
            // var_dump($arrayPost);
            // echo "</pre><hr>";
            // $html = PasarelaVisa::post_form($arrayPost,$url);
            // echo $html;
            // setcookie("test","HOLA");
            // exit;


    //        return redirect()->route('payment_get_path',compact('actividad','fecha_viaje','personas', 'comida_precio','transporte_precio','guia_precio', 'hospedaje_precio'));

        $numorden='1';
        $numorden=$pasarela->contador();
        $urljs="";
        $merchantId='';
        switch ($entorno) {
            case 'dev':
                $urljs="https://static-content-qas.vnforapps.com/v2/js/checkout.js?qa=true";
                $merchantId = $pasarela->merchantidtest();
                break;
            case 'prd':
                $urljs="https://static-content.vnforapps.com/v2/js/checkout.js";
                $merchantId = $pasarela->merchantidprd();
                break;
        }

    // dd("urljs:$urljs,merchantId:$merchantId,sessionToken:$sessionToken,amount:$amount,numorden:$numorden");
            return view('page.payment', compact('total','actividad','fecha_viaje','personas', 'comida_arr', 'comida_precio','transporte_precio','guia_precio', 'hospedaje_precio','sessionToken','amount','nombre','apellido','email','userTokenId','entorno','key','merchantId','numorden','urljs','id_actividad'));
        }
    }

    public function payment_check(Request $request,$entorno,$purchaseNumber,$amount,$titulo,$fecha,$pasajeros)
    {

        $fecha=str_replace('-','/',$fecha);
        // Auth::login($user, true);
        // dd($request->all());
        if (isset($_POST['transactionToken'])){
            // $key = session('key');
            $key =$_COOKIE["key"];
            // dd($key);
            // echo "<hr>".$key."<hr>";
            $transactionToken = $_POST['transactionToken'];
            // $entorno ='dev'; /*$_POST['entorno'];*/
            // $purchaseNumber = $_GET['purchaseNumber'];
            // $amount = $_GET['amount'];
            // echo "<pre>";
            // var_dump($_POST);
            // echo "<pre>";
            $pasarela=new PasarelaVisa();
            $respuesta = $pasarela->authorization($entorno,$key,$amount,$transactionToken,$purchaseNumber);
            // echo "<div class=\"divabsolute\">";
            // echo "<pre>";
            // var_dump($respuesta);
            // echo "<pre>";
            // echo "</div>";
            // session()->forget('key');

            // $data_respuesta = json_decode($respuesta, true);
            $data_respuesta = json_decode($respuesta,true);

            // dd($data_respuesta);
            // $rpt_sd = $data_respuesta['1'];

            $objeto=json_decode($data_respuesta['1']);
            // dd($objeto);

            if($data_respuesta['0']=='200'){
                $fecha_actual=new Carbon();
                $fecha_actual->subHour(5);


                // echo "<hr>rpt ok:".$data_respuesta['0']."<hr>";
                // dd($objeto->order);


                $validator = $request->validate([
                    'email' => 'required',
                    'username' => 'required',
                    'cardNumber' => 'required',
                    'expiration_m' => 'required',
                    'expiration_y' => 'required',
                    'expiration_y' => 'required',
                    'cvv' => 'required',
                    'terminos' => 'required',
                ]);
                $user = User::where('email', $request->input('email'))->first();
                $reservas=null;
                if (!$user){
                    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                    $password = substr(str_shuffle($data), 0, 7);
                    $user = User::create([
                        'email' => $request->input('email'),
                        'name' => $request->input('username'),
                        'password' => bcrypt($password),
                    ]);
                    if ($user){
                        $user_rol = new RoleUser();
                        $user_rol->role_id = 2;
                        $user_rol->user_id = $user->id;
                        $user_rol->save();
                    }

                    $originalDate = $request->input('fecha_viaje');
                    $originalDate = str_replace('/','-', $originalDate);
                    $fecha_viaje = date("Y-m-d", strtotime($originalDate));

                    $reservas = new Reserva();
                    $reservas->codigo = $user->id;
                    $reservas->nombre = $request->input('username');
                    $reservas->fecha_llegada = $fecha_viaje;
                    $reservas->nro_pax = $request->input('personas');
                    $reservas->estado = 0;
                    $reservas->save();

                    if ($reservas){
                        $personas = $request->input('personas');
                        $id_actividad = $request->input('actividad');

                        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->first();
                        $asocicion_id = $precio_actividad->actividad->asociacion_id;
                        $total_actividad = round($precio_actividad->precio+($precio_actividad->precio*$precio_actividad->actividad->asociacion->comision)/100);

                        if ($precio_actividad){
                            $reserva_actividad = new ReservaActividad();
                            $reserva_actividad->titulo = $precio_actividad->actividad->titulo;
                            $reserva_actividad->descripcion = $precio_actividad->actividad->descripcion;
                            $reserva_actividad->precio = $total_actividad;
                            $reserva_actividad->estado = 0;
                            $reserva_actividad->asociacion_id = $asocicion_id;
                            $reserva_actividad->reserva_id = $reservas->id;
                            $reserva_actividad->save();

                            if ($request->has('comida')){
                                for($i=0; $i < count($request->input('comida')); $i++){

                                    $comida_id = explode('-', $request->input('comida')[$i]);
                                    $comida_id = $comida_id[0];

                                    $precio_comida = ComidaPrecio::where('id', $comida_id)->first();

                                    $reserva_comida = new ReservaComida();
                                    $reserva_comida->titulo = $precio_comida->comida->titulo;
                                    $reserva_comida->descripcion = $precio_comida->comida->descripcion;
                                    $reserva_comida->categoria = $precio_comida->categoria;
                                    $reserva_comida->nro_personas = $personas;
                                    $reserva_comida->precio = $precio_comida->precio;
                                    $reserva_comida->estado = 0;
                                    $reserva_comida->asociacion_id = $asocicion_id;
                                    $reserva_comida->reserva_id = $reservas->id;
                                    $reserva_comida->save();
                                }
                            }

                            if ($request->has('hospedaje')){
                                for($i=0; $i < count($request->input('hospedaje')); $i++){

                                    $hospedaje_id = explode('-', $request->input('hospedaje')[$i]);
                                    $hospedaje_id = $hospedaje_id[0];

                                    $precio_hospedaje = HospedajePrecio::where('id', $hospedaje_id)->first();

                                    $reserva_hospedaje = new ReservaHospedaje();
                                    $reserva_hospedaje->titulo = $precio_hospedaje->hospedaje->titulo;
                                    $reserva_hospedaje->descripcion = $precio_hospedaje->hospedaje->descripcion;
                                    $reserva_hospedaje->categoria = $precio_hospedaje->categoria;
                                    $reserva_hospedaje->nro_personas = $personas;
                                    $reserva_hospedaje->precio = $precio_hospedaje->precio;
                                    $reserva_hospedaje->estado = 0;
                                    $reserva_hospedaje->asociacion_id = $asocicion_id;
                                    $reserva_hospedaje->reserva_id = $reservas->id;
                                    $reserva_hospedaje->save();
                                }
                            }

                            if ($request->has('transporte')){
                                for($i=0; $i < count($request->input('transporte')); $i++){

                                    $transporte_id = explode('-', $request->input('transporte')[$i]);
                                    $transporte_id = $transporte_id[0];

                                    $precio_transporte = TransporteExterno::where('id', $transporte_id)->first();

                                    $reserva_transporte = new ReservaTransporteExterno();
                                    $reserva_transporte->codigo = $precio_transporte->codigo;
                                    $reserva_transporte->nombre = $precio_transporte->nombre;
                                    $reserva_transporte->pax = $personas;
                                    $reserva_transporte->precio = $precio_transporte->precio;
                                    $reserva_transporte->categoria = $precio_transporte->categoria;
                                    $reserva_transporte->ruta_salida = $precio_transporte->ruta_salida;
                                    $reserva_transporte->ruta_llegada = $precio_transporte->ruta_llegada;
                                    $reserva_transporte->estado = 0;
                                    $reserva_transporte->comunidad_id = $precio_transporte->comunidad_id;
                                    $reserva_transporte->reserva_id = $reservas->id;
                                    $reserva_transporte->save();
                                }
                            }
                            if ($request->has('guia')){
                                for($i=0; $i < count($request->input('guia')); $i++){

                                    $guia_id = explode('-', $request->input('guia')[$i]);
                                    $guia_id = $guia_id[0];

                                    $precio_guia = Guia::where('id', $guia_id)->first();

                                    $reserva_guia = new ReservaGuia();
                                    $reserva_guia->codigo = $precio_guia->codigo;
                                    $reserva_guia->nombre = $precio_guia->nombre;
                                    $reserva_guia->pax = $personas;
                                    $reserva_guia->precio = $precio_guia->precio;
                                    $reserva_guia->idioma = $precio_guia->idioma;
                                    $reserva_guia->estado = 0;
                                    $reserva_guia->departamento_id = $precio_guia->departamento_id;
                                    $reserva_guia->reserva_id = $reservas->id;
                                    $reserva_guia->save();
                                }
                            }

                        }
                    }

                }
                else{
                    $originalDate = $request->input('fecha_viaje');
                    $originalDate = str_replace('/','-', $originalDate);
                    $fecha_viaje = date("Y-m-d", strtotime($originalDate));

                    $reservas = new Reserva();
                    $reservas->codigo = $user->id;
                    $reservas->nombre = $request->input('username');
                    $reservas->fecha_llegada = $fecha_viaje;
                    $reservas->nro_pax = $request->input('personas');
                    $reservas->estado = 0;
                    $reservas->save();

                    if ($reservas){
                        $personas = $request->input('personas');
                        $id_actividad = $request->input('actividad');

                        $precio_actividad = ActividadPrecio::where('actividad_id', $id_actividad)->where('min','<=',$personas)->where('max','>=',$personas)->first();
                        $asocicion_id = $precio_actividad->actividad->asociacion_id;
                        $total_actividad = round($precio_actividad->precio+($precio_actividad->precio*$precio_actividad->actividad->asociacion->comision)/100);

                        if ($precio_actividad){
                            $reserva_actividad = new ReservaActividad();
                            $reserva_actividad->titulo = $precio_actividad->actividad->titulo;
                            $reserva_actividad->descripcion = $precio_actividad->actividad->descripcion;
                            $reserva_actividad->precio = $total_actividad;
                            $reserva_actividad->estado = 0;
                            $reserva_actividad->asociacion_id = $asocicion_id;
                            $reserva_actividad->reserva_id = $reservas->id;
                            $reserva_actividad->save();

                            if ($request->has('comida')){
                                for($i=0; $i < count($request->input('comida')); $i++){

                                    $comida_id = explode('-', $request->input('comida')[$i]);
                                    $comida_id = $comida_id[0];

                                    $precio_comida = ComidaPrecio::where('id', $comida_id)->first();

                                    $reserva_comida = new ReservaComida();
                                    $reserva_comida->titulo = $precio_comida->comida->titulo;
                                    $reserva_comida->descripcion = $precio_comida->comida->descripcion;
                                    $reserva_comida->categoria = $precio_comida->categoria;
                                    $reserva_comida->nro_personas = $personas;
                                    $reserva_comida->precio = $precio_comida->precio;
                                    $reserva_comida->estado = 0;
                                    $reserva_comida->asociacion_id = $asocicion_id;
                                    $reserva_comida->reserva_id = $reservas->id;
                                    $reserva_comida->save();
                                }
                            }

                            if ($request->has('hospedaje')){
                                for($i=0; $i < count($request->input('hospedaje')); $i++){

                                    $hospedaje_id = explode('-', $request->input('hospedaje')[$i]);
                                    $hospedaje_id = $hospedaje_id[0];

                                    $precio_hospedaje = HospedajePrecio::where('id', $hospedaje_id)->first();

                                    $reserva_hospedaje = new ReservaHospedaje();
                                    $reserva_hospedaje->titulo = $precio_hospedaje->hospedaje->titulo;
                                    $reserva_hospedaje->descripcion = $precio_hospedaje->hospedaje->descripcion;
                                    $reserva_hospedaje->categoria = $precio_hospedaje->categoria;
                                    $reserva_hospedaje->nro_personas = $personas;
                                    $reserva_hospedaje->precio = $precio_hospedaje->precio;
                                    $reserva_hospedaje->estado = 0;
                                    $reserva_hospedaje->asociacion_id = $asocicion_id;
                                    $reserva_hospedaje->reserva_id = $reservas->id;
                                    $reserva_hospedaje->save();
                                }
                            }

                            if ($request->has('transporte')){
                                for($i=0; $i < count($request->input('transporte')); $i++){

                                    $transporte_id = explode('-', $request->input('transporte')[$i]);
                                    $transporte_id = $transporte_id[0];

                                    $precio_transporte = TransporteExterno::where('id', $transporte_id)->first();

                                    $reserva_transporte = new ReservaTransporteExterno();
                                    $reserva_transporte->codigo = $precio_transporte->codigo;
                                    $reserva_transporte->nombre = $precio_transporte->nombre;
                                    $reserva_transporte->pax = $personas;
                                    $reserva_transporte->precio = $precio_transporte->precio;
                                    $reserva_transporte->categoria = $precio_transporte->categoria;
                                    $reserva_transporte->ruta_salida = $precio_transporte->ruta_salida;
                                    $reserva_transporte->ruta_llegada = $precio_transporte->ruta_llegada;
                                    $reserva_transporte->estado = 0;
                                    $reserva_transporte->comunidad_id = $precio_transporte->comunidad_id;
                                    $reserva_transporte->reserva_id = $reservas->id;
                                    $reserva_transporte->save();
                                }
                            }

                            if ($request->has('guia')){
                                for($i=0; $i < count($request->input('guia')); $i++){

                                    $guia_id = explode('-', $request->input('guia')[$i]);
                                    $guia_id = $guia_id[0];

                                    $precio_guia = Guia::where('id', $guia_id)->first();

                                    $reserva_guia = new ReservaGuia();
                                    $reserva_guia->codigo = $precio_guia->codigo;
                                    $reserva_guia->nombre = $precio_guia->nombre;
                                    $reserva_guia->pax = $personas;
                                    $reserva_guia->precio = $precio_guia->precio;
                                    $reserva_guia->idioma = $precio_guia->idioma;
                                    $reserva_guia->estado = 0;
                                    $reserva_guia->departamento_id = $precio_guia->departamento_id;
                                    $reserva_guia->reserva_id = $reservas->id;
                                    $reserva_guia->save();
                                }
                            }

                        }
                    }

                }
                $numero_pedido=$purchaseNumber;
                $numero_pedido=$reservas->codigo;
                // $nombre_tarjeta_habiente='';
                $numero_tarjeta_habiente=$objeto->dataMap->CARD;
                $fecha_pedido=$fecha_actual->toDateTimeString();
                $importe=$objeto->order->amount;
                $moneda=$objeto->order->currency;
                // $descripción_producto='';
                // $terminos_condiciones='';
                unset($_COOKIE["key"]);
                exit;
                return redirect($this->redirectTo);
                // return view('',compact('numero_tarjeta_habiente','fecha_pedido','importe','moneda'));
            }
            elseif($objeto){
                // dd($objeto->data->ACTION_DESCRIPTION);
                $fecha_actual=new Carbon();
                $fecha_actual->subHour(5);
                // $fecha_llegada_ = Carbon::createFromFormat("Y-m-d hh:ii:ss", $item->fecha_llegada);

                $nro_pedido=$purchaseNumber;
                $fecha_operacion=$fecha_actual->toDateTimeString();
                $motivo=$objeto->data->ACTION_DESCRIPTION;

                // echo "<hr>rpt error:".$data_respuesta['0']."<hr>";
                // dd($objeto->errorCode);
                return redirect()->route('detail_date_path',[str_replace(' ', '-', strtolower($titulo)),str_replace('/','-',$fecha),$pasajeros])->with(['msg'=>'Ocurrio un error('.$objeto->errorCode.') vuelva a intentarlo.','nro_pedido'=>$nro_pedido,'fecha_operacion'=>$fecha_operacion,'motivo'=>$motivo]);
            }
            else{
                return redirect()->route('detail_date_path',[str_replace(' ', '-', strtolower($titulo)),str_replace('/','-',$fecha),$pasajeros])->with('msg','Ocurrio un error('.$objeto.') vuelva a intentarlo.');
                // echo "<hr>rpt nulo:".$data_respuesta['0']."<hr>";
                // dd($objeto);

            }
            // echo "<hr>rpt :".$rpt_sd."<hr>";
            // echo "<hr>rpt :".var_dump($rpt)."<hr>";

            // if ($rpt!='null'){
            //     echo "<hr>rpt no es nulo :".var_dump($rpt)."<hr";
            // }
            // else{
            //     echo "<hr>rpt :Es nulo ".var_dump($rpt)."<hr>";
            // }
            // foreach($rpt as $rpt_){
            //     echo "<hr>rpt foreach:".$rpt_."<hr>";
            // }
            // $rpt = json_decode($data_respuesta['1'],true);
            // $rpt=json_decode($data_respuesta['1'],true);
            // $rpt2=explode(',',$data_respuesta['1']);
            // $rpt2=explode(',',$rpt);

            // if(is_array($rpt)){
            //     echo "<hr>rpt array:".$rpt."<hr>";

            // }
            // else{
            //     $rpte=explode(",",$rpt);
            //     echo "<hr>rpt txt:".$rpte."<hr>";

            // }
            // $rpt=explode(',',$rpt);
            // if($data_respuesta['0']=='200'){


                // foreach($rpt as $valor){
                //         echo "<hr>".$valor."<hr>";

                //     }
                // echo "<hr>".$rpt[0]."<hr>";
                // echo "<hr>".$rpt['order']."<hr>";
                // foreach($rpt->order as $valor){
                //     echo "<hr>".$valor."<hr>";

                // }
                // echo $data_respuesta['1'];

            // }
            // else{

                // if(is_array($rpt)){
                //     $rpt1='';
                //     foreach($rpt as $valor){
                //         $rpt1=$valor;
                //     }
                // }
                // else{
                //     $rpt1=$data_respuesta['1'];

                // }
                // redirect()->route()->back();
                // http://mietnia.nu/payment
                // $rpt1='';
                // if($rpt){
                //     foreach($rpt as $valor){
                //         $rpt1=$rpt[0];

                //     }
                // }
                // return redirect()->route('detail_date_path',[str_replace(' ', '-', strtolower($titulo)),$fecha,$pasajeros])->with('msg','Ocurrio un error('.$data_respuesta['0'].') vuelva a intentarlo.'.$data_respuesta['1']);
                // return redirect()->route('payment_path')->withInput(['txt_actividad_id' => $actividad_id,'txt_personas'=>$pasajeros,'txt_fecha_viaje'=>$fecha])->with('error', 'Ocurrio un error('.$data_respuesta['0'].') vuelva a intentarlo.');
                // detail/huilloq-chasqui/22-05-2019/2
            // }

            // echo "<hr>".$data_respuesta['0']."<hr>";
            // $msj='no se proceso';
            // if(isset($data_respuesta)){
            //     foreach ($data_respuesta['order'] as $array) {
            //         $msj=$array['actionCode'];
            //         // Pais::create($array);
            //     }
            // }
            // echo "<hr>".$msj."<hr>";
            // echo $msj;

        }

//        $user = User::where('email', 'pk_do2@hotmail.com')->first();
//        Auth::login($user, true);
//        return Auth::user()->id;

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

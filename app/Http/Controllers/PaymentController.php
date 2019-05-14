<?php

namespace EtniasPeru\Http\Controllers;

use EtniasPeru\Actividad;
use EtniasPeru\ActividadPrecio;
use EtniasPeru\Comida;
use EtniasPeru\ComidaPrecio;
use EtniasPeru\Guia;
use EtniasPeru\HospedajePrecio;
use EtniasPeru\Reserva;
use EtniasPeru\ReservaActividad;
use EtniasPeru\ReservaComida;
use EtniasPeru\ReservaGuia;
use EtniasPeru\ReservaHospedaje;
use EtniasPeru\ReservaTransporteExterno;
use EtniasPeru\RoleUser;
use EtniasPeru\TransporteExterno;
use EtniasPeru\TransportePrecio;
use EtniasPeru\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use EtniasPeru\Helpers\PasarelaVisa;

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

        if ($request->has('comida')){
            $comida_arr = $request->input('comida');
            $i=0;
            foreach ($comida_arr as $comida_a){
                $comida_id = explode('-', $comida_a);
                $comida_precio[$i] = ComidaPrecio::find($comida_id[0]);
                $i++;
            }
        }

        if ($request->has('transporte')){
            $transporte_arr = $request->input('transporte');
            $j=0;
            foreach ($transporte_arr as $transporte_a){
                $transporte_id = explode('-', $transporte_a);
                $transporte_precio[$j] = TransporteExterno::find($transporte_id[0]);
                $j++;
            }
        }

        if ($request->has('hospedaje')){
            $hospedaje_arr = $request->input('hospedaje');
            $k=0;
            foreach ($hospedaje_arr as $hospedaje_a){
                $hospedaje_id = explode('-', $hospedaje_a);
                $hospedaje_precio[$k] = HospedajePrecio::find($hospedaje_id[0]);
                $k++;
            }
        }

        if ($request->has('guia')){
            $guia_arr = $request->input('guia');
            $l=0;
            foreach ($guia_arr as $guia_a){
                $guia_id = explode('-', $guia_a);
                $guia_precio[$l] = Guia::find($guia_id[0]);
                $l++;
            }
        }

    //-- creamos l asesion para la pasarela
        if ($total>0){
            $pasarela=new PasarelaVisa();
            // $entorno = $_POST['entorno'];
            $entorno ="dev";
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
            $amount = number_format($total, 2);
            
            // dd("entorno:$entorno,amount:$usr,key:$pwd");
            $key = $pasarela->securitykey($entorno,$usr,$pwd);
            setcookie("key",$key);
            // session('key', $key);
            // echo "Sessi&oacute;n Key: ",
            // dd("entorno:$entorno,amount:$amount,key:$key");

            $sessionToken = $pasarela->create_token($entorno,$amount,$key);
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

        $numorden='00001';

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
            return view('page.payment', compact('total','actividad','fecha_viaje','personas', 'comida_arr', 'comida_precio','transporte_precio','guia_precio', 'hospedaje_precio','sessionToken','amount','nombre','apellido','email','userTokenId','entorno','key','merchantId','numorden','urljs'));
        }
    }

    public function payment_check(Request $request,$entorno,$purchaseNumber,$amount)
    {
        // Auth::login($user, true);
        // dd($request->all());
        if (isset($_POST['transactionToken'])){
            // $key = session('key');
            $key =$_COOKIE["key"];
            // dd($key);
            echo "<hr>".$key."<hr>";
            $transactionToken = $_POST['transactionToken'];
            // $entorno ='dev'; /*$_POST['entorno'];*/
            // $purchaseNumber = $_GET['purchaseNumber'];
            // $amount = $_GET['amount'];
            echo "<pre>";
            var_dump($_POST);
            echo "<pre>";
            $pasarela=new PasarelaVisa();
            $respuesta = $pasarela->authorization($entorno,$key,$amount,$transactionToken,$purchaseNumber);
            echo "<div class=\"divabsolute\">";
            echo "<pre>";
            var_dump($respuesta);
            echo "<pre>";
            echo "</div>";
            // session()->forget('key');
                unset($_COOKIE["key"]);
            exit;
        }

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

        

        return redirect($this->redirectTo);

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

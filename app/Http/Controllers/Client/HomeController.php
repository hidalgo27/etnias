<?php

namespace EtniasPeru\Http\Controllers\Client;

use EtniasPeru\Http\Controllers\Controller;
use EtniasPeru\Reserva;
use EtniasPeru\ReservaActividad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public function index()
//    {
//        return view('home');
//    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $reserva = Reserva::with('actividades')->where('user_id', $request->user()->id)->where('estado',0)->get();
        return view('client.home', compact('reserva','reserva_actividad'));
    }
    /*
        public function someAdminStuff(Request $request)
        {
            $request->user()->authorizeRoles(‘Client’);
            return view(‘some.view’);
        }
        */

}

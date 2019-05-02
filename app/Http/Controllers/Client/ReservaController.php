<?php

namespace EtniasPeru\Http\Controllers\Client;

use EtniasPeru\Reserva;
use EtniasPeru\ReservaActividad;
use EtniasPeru\ReservaComida;
use EtniasPeru\ReservaGuia;
use EtniasPeru\ReservaHospedaje;
use EtniasPeru\ReservaTransporteExterno;
use Illuminate\Http\Request;
use EtniasPeru\Http\Controllers\Controller;

class ReservaController extends Controller
{
    public function order(Request $request, $id) {
        $request->user()->authorizeRoles(['user', 'admin']);
        $reserva_actividad = ReservaActividad::with('reserva')->where('reserva_id', $id)->get();
        $reserva_comida = ReservaComida::where('reserva_id', $id)->get();
        $reserva_guia = ReservaGuia::where('reserva_id', $id)->get();
        $reserva_hospedaje = ReservaHospedaje::where('reserva_id', $id)->get();
        $reserva_transporte = ReservaTransporteExterno::where('reserva_id', $id)->get();

        return view('client.detail-order', compact('reserva_actividad','reserva_comida','reserva_guia','reserva_hospedaje','reserva_transporte'));
    }

    public function cancelar(Request $request){
//        $id_reserva = Reserva::wh
        $cancelar = Reserva::findOrFail($request->input("id_reserva"));
        $cancelar->estado = 1;
        $cancelar->save();
        return back()->withInput()->with('status', 'Se cancelo su reserva');
    }
}

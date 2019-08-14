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
use Illuminate\Support\Facades\Mail;

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
        $cancelar->estado = 2;
        $cancelar->save();

        $name = 'Administrador';
        $email = 'atencionalcliente@mietnia.com';

        Mail::send(['html' => 'notifications.page.cancel-reservation'], [
            'name' => $name,
            'email' => $email
        ], function ($messaje) use ($email) {
            $messaje->to($email, 'MiEtnia')
                ->subject('MiEtnia')
//                    ->cc($from2, 'MiEtnia')
                /*->attach('ruta')*/
                ->from('atencionalcliente@mietnia.com', 'MiEtnia');
        });

        return back()->withInput()->with('status', 'Se cancelo su reserva');
    }
}

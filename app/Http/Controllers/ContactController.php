<?php

namespace EtniasPeru\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.contact');
    }

    public function contact_s(Request $request)
    {
        $from = 'atencionalcliente@mietnia.com';

        $name = $request->input('c_name');
        $email = $request->input('c_email');
        $phone = $request->input('c_phone');
        $city = $request->input('c_city');
        $comment = $request->input('c_comment');
        try {
            Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('MiEtnia')
                    /*->attach('ruta')*/
                    ->from('atencionalcliente@mietnia.com', 'MiEtnia');
            });
            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'city' => $city,
                'comment' => $comment
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'MiEtnia')
                    ->subject('MiEtnia')
//                    ->cc($from2, 'MiEtnia')
                    /*->attach('ruta')*/
                    ->from('atencionalcliente@mietnia.com', 'MiEtnia');
            });

            return 'Thank you.';
        }
        catch (Exception $e){
            return $e;
        }
//        return view('page.itinerary', ['paquete'=>$paquete, 'paquete_destinos'=>$paquete_destinos]);
    }
}

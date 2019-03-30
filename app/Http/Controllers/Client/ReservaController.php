<?php

namespace EtniasPeru\Http\Controllers\Client;

use Illuminate\Http\Request;
use EtniasPeru\Http\Controllers\Controller;

class ReservaController extends Controller
{
    public function order(Request $request, $id) {
        return view('client.detail-order');
    }
}

<?php

namespace EtniasPeru\Http\Controllers\Client;

use Illuminate\Http\Request;
use EtniasPeru\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index(){
        return view('client.profile');
    }
}

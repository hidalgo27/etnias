<?php

namespace EtniasPeru\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index(){
        return view('page.join-our');
    }
    public function comunidad(){
        return view('page.join-comunidad');
    }
    public function transportista(){
        return view('page.join-transport');
    }
    public function guia(){
        return view('page.join-guia');
    }
}

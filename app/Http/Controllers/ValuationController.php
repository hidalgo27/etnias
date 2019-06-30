<?php

namespace EtniasPeru\Http\Controllers;

use Illuminate\Http\Request;

class ValuationController extends Controller
{
    public function index(){
        return view('page.valuation');
    }
}

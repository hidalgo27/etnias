<?php

namespace EtniasPeru\Http\Controllers\Client;

use EtniasPeru\Http\Controllers\Controller;
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
        $user=$request->user()->authorizeRoles(['user', 'admin']);
        dd($user);
//        return view('client.home');
    }
    /*
        public function someAdminStuff(Request $request)
        {
            $request->user()->authorizeRoles(‘Client’);
            return view(‘some.view’);
        }
        */

}

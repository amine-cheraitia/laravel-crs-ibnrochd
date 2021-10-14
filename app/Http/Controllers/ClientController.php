<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        //$this->middleware('TestMiddleware');
    }
    public function liste()
    {
        return view('client');
    }

    public function sessionClient(Request $request)
    {

        $nom = "Mohamed";
        $request->session()->put('cl1', $nom);
        session(["yyy" => $nom]);
        return view('login2');
    }

    public function index(Request $request)
    {

        $nom1 = "Mohamed";
        $nom2 = "Amine";
        $request->session()->put('cl1', $nom1);
        session(["cl2" => $nom2]);
        $request->session()->forget('cl1');
        $request->session()->flush();
        /*      $request->session()->all();
        $request->session()->has("cl1");
        $request->session()->exists("cl1");
        $request->session()->push("tab", $nom1); */


        return view('login2');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function index()
    {
        $content = "<h1>Ceci est un test</h1>";
        //return response($content, 200)->header('Content-type', 'text/html');
        //return response()->json(['nom' => 'mezian', "age" => "45"]);
        //return redirect()->route('formulaire');
        //return redirect()->route('FournisseurController@create');
        /*      return redirect()->away('https://stackoverflow.com');
        return response()->view('formulaire'); */
        //return response()->download('testeDB.sql', 'testeDB.sql')->deleteFileAfterSend;
        return response()->file('testeDB.sql');
    }
}
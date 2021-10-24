<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        //$this->middleware('TestMiddleware');
    }
    public function liste()
    {
        $clients = Client::whereRaw(" nom LIKE ? ", ['%h%'])->get();
        return view('client.liste', ['clients' => $clients]);
    }

    public function create(Request $request)
    {
        $client = new Client;
        $client->nom = 'salim';
        $client->fill(['adresse' => 'cheraga', 'chiffre_affaire' => 1000000]);
        $client->save();
        return 'clien crée avec succée';
    }

    public function update(Request $request)
    {
        $client =  Client::find(2);
        $client->update(['nom' => 'khaled', 'adresse' => 'kouba']);
        $client->touch();
        return 'clien mise à jour avec succée';
    }

    public function withdeleted(Request $request)
    {
        $clients = Client::onlyTrashed()->whereId(3)->first();
        $clients->forceDelete();
        return 'client supprimé';
    }


    public function delete(Request $request)
    {
        Client::destroy([5, 3]);
        return 'clien supprimé temporairement';
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
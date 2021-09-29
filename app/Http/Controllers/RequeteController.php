<?php

namespace App\Http\Controllers;

use App\Rules\Arabe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Response;

class RequeteController extends Controller
{
    public function index(Request $request)
    {
        //return $request->path();
        /*
        if ($request->is('/admin/*')) {
            return 'Admin';
        } else {
            return 'not admin';
        }
        if ($request->isMethod('get')) {
            return "methode get";
        } else {
            return "autre";

        */
        //$nom = $request->input('nom', '-');
        $nom = $request->nom;
        //return $nom;
        //return $request->all();
        //return $request->input('zz.nom');
        //return $request->query('nom');
        //return $request->query();
        //return "existe " . $request->has("nom") . " non vide" . $request->filled("nom");
        /*   if (!$request->filled("nom"))
            return "Veuillez saisir le champ 'nom'"; */


        /*         $request->img;
        $request->hasFile('img');

        $fichier = $request->file('img');
        if ($request->file('img')->isValid()) {
            $f = $fichier->path();
            $ext = $fichier->extension();
            $fichier->storeAs('images',  $request->nom . '.' . Carbon::now()->format('Y-m-d_H-i-s') . '.' . $fichier->extension());
        } */
        $response = new Response('ok');
        $response->withCookie(cookie('etm', $nom, 30 * 60));
        return $response;
        //$response->withCookie(cookie()->forever('etm', $nom, 30 * 60));
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'nomL' => "required",
            'nomA' =>  ["required", new Arabe],
            'email' => "required",
            'age' => "numeric|min:18",
            'salaire' => 'numeric|between:18000,108000',
            'mdp' => "required|confirmed",
            'mdp_confirmation' => "required"
        ]);

        return "Utilisateur crée avec succée";
    }
}
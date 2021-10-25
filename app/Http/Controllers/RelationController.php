<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Compte;
use Carbon\Carbon;
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function unAun()
    {
        $compte = Compte::whereUsername('abdelah@abdelah')->firstOrFail();
        $client = $compte->client;
        return $client->nom . ' qui réside à ' . $client->adresse;
    }

    public function create()
    {
        $compte =  Compte::Create(['username' => 'fateh@fetah',  'password' => '111']);
        //$compte = Compte::find(4);
        $client =  Client::find(3); // fils
        $compte->client()->save($client);
        return 'ok';
    }

    public function unAplusieurs()
    {
        $client = Client::find(2);

        $client->commandes()->create(['date_commande' => new Carbon()]);

        return 'ok commande';
    }
    /*$commande = Commande::create(['date_commande' => new Carbon()]);
        $client->commandes->save($commande);
        */
    public function unAplusieursRecherche()
    {

        $commande = Commande::find(1);
        return $commande->client->nom . ' est le client qui réside à ' . $commande->client->adresse .
            ' et qui a commandé la commande qui date du ' . $commande->date_commande->format('d/m/Y');
    }

    public function unAplusieursAll()
    {
        return Client::doesntHave('commandes')->get();
    }
    //return Client::has('commandes')->get(); que les client qui ont passé une commande
    //return Client::withCount('commandes')->get(); le nombre de commande par client

    public function plusieursAplusieurs()
    {
        $commande = Commande::find(1);
        $produits = "<h2>Liste des produits commander dans la commande N° $commande->id</h2>";
        foreach ($commande->produits as $pdt) {
            $produits .=  "l'article << $pdt->designation >> est commandé a une quantité de " . $pdt->pivot->quantité_commandé . " <br>";
        }

        return $produits;
    }
    //$commande->produits()->sync([1 => ["quantité_commandé" => 9], 2 => ["quantité_commandé" => 9]]);
    //$commande->produits()->attach([1 => ['quantité_commandé' => 3], 3 => ['quantité_commandé' => 2]]);
    //$commande->produits()->detach(1);
}
<?php

namespace App\Http\Controllers;

use App\Client;
use App\Compte;
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
        $client =  Client::find(3);
        $compte->client()->save($client);
        return 'ok';
    }
}
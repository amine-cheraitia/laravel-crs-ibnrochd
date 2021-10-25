<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['date_commande', 'id_client'];
    protected $dates = ['date_commande'];
    protected $dateFormat = 'Y/m/d';

    public function client()
    {
        return $this->belongsTo('App\Client', 'id_client');
    }

    public function produits()
    {
        return $this->belongsToMany('App\Produit', 'table_commandes_produits', 'id_commande', 'id_produit')->withPivot(['quantité_commandé']);
    }
}
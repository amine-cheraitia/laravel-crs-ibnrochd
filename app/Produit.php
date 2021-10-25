<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['designation', 'quantité_Stocké'];

    public function commandes()
    {
        return $this->belongsToMany('App\Commande', 'table_commandes_produits', 'id_produit', 'id_commande')->withPivot(['quantité_commandé']);
    }
}
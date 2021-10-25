<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = "id";

    protected $guarded = [];
    //protected $fillable = [];
    protected $hidden = [];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $timesstamps = false;
    //protected $dateFormat = 'Y/m/d H:i:s';

    public function compte()
    {
        return $this->belongsTo('App\Compte', 'id_compte');
    }

    public function commandes()
    {
        return $this->hasMany('App\Commande', 'id_client');
    }
}
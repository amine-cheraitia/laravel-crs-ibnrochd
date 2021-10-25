<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];

    public function client()
    {
        return $this->hasOne('App\Client', 'id_compte');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function wilaya()
    {
        return $this->belongsTo('App\Wilaya', 'id_wilaya');
    }
}
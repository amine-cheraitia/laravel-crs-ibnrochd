<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    /**
     * Get all of the comments for the Wilaya
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function consultations()
    {
        return $this->hasManyThrough('App\Consultation', 'App\Patient', 'id_wilaya', 'id_patient');
    }
}
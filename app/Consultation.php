<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    /**
     * Get the user that owns the Consultation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient', 'id_patient');
    }
}
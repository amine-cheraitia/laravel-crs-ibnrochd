<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = "id";

    protected $guarded = [];
    protected $fillable = [];
    protected $hidden = [];
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $timesstamps = false;
    protected $dateFormat = 'Y/m/d H:i:s';
}
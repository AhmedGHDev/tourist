<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    public function contients()
    {
        return $this->hasMany('Contient', 'planet_id', 'id');
    }

    public function galaxcies()
    {
        return $this->belongsTo('Galaxcy', 'glaxcy_id', 'id');
    }
}

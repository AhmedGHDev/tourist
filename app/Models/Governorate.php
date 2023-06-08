<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use HasFactory;
    public function coutries()
    {
        return $this->hasMany('Country', 'country_id', 'id');
    }

    public function planets()
    {
        return $this->belongsTo('Planet', 'planet_id', 'id');
    }
}

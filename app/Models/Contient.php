<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contient extends Model
{
    use HasFactory;
    public function countries()
    {
        return $this->hasMany('Country', 'planet_id', 'id');
    }

    public function planets()
    {
        return $this->belongsTo('Planet', 'planet_id', 'id');
    }
}

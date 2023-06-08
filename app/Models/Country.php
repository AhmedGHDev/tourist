<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function governorates()
    {
        return $this->hasMany('Governorate', 'overnorate_id', 'id');
    }

    public function contients()
    {
        return $this->belongsTo('Contient', 'contient_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galaxcy extends Model
{
    use HasFactory;
    public function planets()
    {
        return $this->hasMany('Planet', 'glaxcy_id', 'id');
    }
}

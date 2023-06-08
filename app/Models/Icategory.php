<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icategory extends Model
{
    use HasFactory;
    public function institution()
    {
        return $this->hasMany('Institution', 'icategory_id', 'id');
    }
}

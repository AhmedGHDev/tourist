<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function governorate()
    {
        return $this->belongsTo('Governorate', 'governorate_id', 'id');
    }
    public function categories()
    {
        return $this->belongsTo('Category', 'category_id', 'id');
    }

}

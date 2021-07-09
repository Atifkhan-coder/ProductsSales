<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
// Business Relation...
    public function business()
    {
        return $this->belongsTo('App\Models','business_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
     //
     public function user()
     {
         return $this->belongsTo('App\Models\User','user_id');
     }
     //
     public function product()
     {
         return $this->hasMany('App\Models\Product');
     }
     //
     public function cart()
     {
         return $this->hasMany('App\Models\Cart');
     }
    use HasFactory;
}

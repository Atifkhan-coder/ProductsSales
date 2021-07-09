<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
// Fillable...
    protected $fillable = [
        'title','description',
        'picture', 'price',
        'category_id', 'expdate'
    ];
// Business Relation...
    public function business()
    {
        return $this->belongsTo('App\Models','business_id');
    }
// Category Relation...
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    use HasFactory;
}

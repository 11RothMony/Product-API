<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'paragraph', 'category', 'brand', 'price', 'stock', 'rating', 'order', 'sales', 'photos'
    ];

    protected $casts = [
        'photos' => 'array', // Cast the photos field to an array
    ];
}

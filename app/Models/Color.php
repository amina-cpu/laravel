<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    // Define the relationship with the Product model
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_colors');
    }
}

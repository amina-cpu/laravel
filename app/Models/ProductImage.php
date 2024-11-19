<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    // Define the relationship with ProductColor
    public function productColor()
    {
        return $this->belongsTo(ProductColor::class);
    }

    // Optionally, define the relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

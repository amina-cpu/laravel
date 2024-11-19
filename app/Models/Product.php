<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductColor;


class Product extends Model
{
    // Define the relationship with the Color model
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }
     
    public function productColor()
    {
    return $this->hasMany(ProductColor::class);
    }
    // Define the relationship with ProductImage through ProductColor
    public function productImages()
    {
        return $this->hasManyThrough(ProductImage::class, ProductColor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductColor;


class Product extends Model
{
    // Define the relationship with the Color model
    public function colors()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }
     
    public function productColor()
    {
    return $this->hasMany(ProductColor::class);
    }
    public function images()
    {
    return $this->hasMany(ProductImage::class, 'product_color_id', 'id');
    }
    // Define the relationship with ProductImage through ProductColor
    public function productImages()
    {
        return $this->hasManyThrough(ProductImage::class, ProductColor::class);
    }
}

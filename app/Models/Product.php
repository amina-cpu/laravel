<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Define the many-to-many relationship with the Color model.
     */
    public function colors()
    {
        return $this->belongsToMany(
            Color::class,           // Related model
            'product_colors',       // Pivot table
            'product_id',           // Foreign key in pivot table
            'color_id'              // Related key in pivot table
        );
    }

    /**
     * Define the relationship with ProductColor.
     */
    public function productColors()
    {
        return $this->hasMany(ProductColor::class, 'product_id', 'id');
    }

    /**
     * Define the relationship with ProductImage through ProductColor.
     */
    public function images()
    {
        return $this->hasManyThrough(
            ProductImage::class,  // Final related model
            ProductColor::class,  // Intermediate model
            'product_id',         // Foreign key on ProductColor
            'product_color_id',   // Foreign key on ProductImage
            'id',                 // Local key on Product
            'id'                  // Local key on ProductColor
        );
    }
}

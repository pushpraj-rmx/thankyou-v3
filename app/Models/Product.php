<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Add fillable properties to allow mass assignment
    protected $fillable = ['name', 'description', 'price'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    // Define the relationship with sizes
    public function sizes()
    {
        return $this->hasMany(ProductSize::class);
    }
}

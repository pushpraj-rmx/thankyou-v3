<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['size', 'price', 'product_id']; // Make sure 'size' and 'price' are fillable
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

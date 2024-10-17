<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // Mass assignable attributes
    protected $fillable = ['image_path', 'title', 'short_paragraph', 'button_text', 'button_url'];
    
    use HasFactory;

}

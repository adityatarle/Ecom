<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'email',
        'review_text',
         'image_path',
        'rating',
        'is_approved',
    ];
  public function product()
   {
       return $this->belongsTo(Product::class);
   }
}
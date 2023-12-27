<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductImage extends Model
{
    use HasFactory;

    public function productlist()
    {
        return $this->belongsTo(Product::class, 'product_lists_id', 'id');
    }
}

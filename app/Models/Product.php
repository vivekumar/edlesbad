<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = array('*');
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function gallery()
    {
        return $this->hasMany(ProductImage::class, 'product_id')->orderBy('image_ordering', 'ASC');
    }
}

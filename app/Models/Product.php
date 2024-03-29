<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\ProductAccesories;

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
    public function pdfs()
    {
        return $this->hasMany(ProductPdf::class, 'product_id')->orderBy('pdf_ordering', 'ASC');
    }
    public function accesories()
    {
        return $this->hasMany(ProductAccesories::class, 'product_id')->orderBy('accesories_ordering', 'ASC');
    }
}

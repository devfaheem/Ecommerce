<?php

namespace App;

use App\Brand;
use App\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'sku',
        'brand_id',
        'productcategory_id',
        'name',
        'description', 
        'quantity',
        'price',
        'size',
        'color',
        'stocks',
        'image', 
        'image1', 
        'image2', 
        'image3', 
        'status'
    ];


    public function productcategory()
    {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}

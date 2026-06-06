<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'description',
        'purchase_price',
        'sale_price',
        'stock',
        'minimum_stock',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

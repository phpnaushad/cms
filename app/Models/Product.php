<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    protected $fillable = [
     'category_id',
     'product_name',     
     'product_image',
     'product_detail',
     'product_price',
     'product_sku',
     'product_stock',
     'product_grn',
     'status'
	];
}

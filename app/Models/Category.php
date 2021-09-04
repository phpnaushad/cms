<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';
    protected $fillable = [
     'category_name',
     'category_detail',     
     'status'
	];


    public function getProductsByCategory()
    {
        return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }

    public static function getAllCategory()
    {
        return Category::orderBy('id','DESC');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banners';
    protected $fillable = [     
     'banner_title',
     'banner_detail',   
     'banner_image',
     'status'
	];

}

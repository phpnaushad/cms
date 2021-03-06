<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostsCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_category';
    protected $fillable = [     
     'title',
     'slug',
     'status'
	];
}

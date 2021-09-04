<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    protected $fillable = [     
     'post_cat_id',
	 'post_tag_id',	
     'title',
	 'slug',
	 'description',
	 'quote',
	 'image',
	 'tags',
	 'status'
	];
}

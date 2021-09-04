<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostsTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_tags';
    protected $fillable = [     
     'title',
     'slug',
     'status'
	];
}

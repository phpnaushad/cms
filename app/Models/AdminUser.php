<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_user';
    protected $fillable = [
     'name',
     'email',
     'password',
     'status'
	];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';
    protected $fillable = [
     'username',
     'email',     
     'password',
     'first_name',
     'last_name',
     'address',
     'landmark',
     'city',
     'state',
     'country',
     'pincode',
     'status',
     'mobile'
	];
}

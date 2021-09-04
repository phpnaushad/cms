<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
           /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';
    protected $fillable = [
     'customer_id',
     'order_no',     
     'courier_amount',
     'discount',
     'total_amount',
     'payment_mode',
     'status'    
	];


    public function getItems()
    {
        return $this->hasMany('App\Models\OrderItem', 'order_id', 'id');
    }
    
}

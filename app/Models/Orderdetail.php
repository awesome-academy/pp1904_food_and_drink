<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Order;

class Orderdetail extends Model
{
	protected $table = 'orderdetails';

    protected $fillable = [
        'id',
        'product_id',
        'order_id',
        'price_each',
        'quantity_order',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    } 

    public function order()
    {
        return $this->belongsTo(Order::class);
    } 
}

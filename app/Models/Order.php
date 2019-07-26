<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Orderdetail;
use App\Models\Customer;

class Order extends Model
{
	protected $table = 'orders';

    protected $fillable = [
        'id',
        'customer_id',
        'orderdetail_id',
        'required_date',
        'shipped_date',
        'total_price',
    ];

    public function orderdetails()
    {
        return $this->hasMany(Orderdetail::class);
    } 

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    } 
}

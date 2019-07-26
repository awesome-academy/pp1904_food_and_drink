<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'id',
        'customer_name',
        'customer_address',
        'customer_phone',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    } 

    public function user()
    {
        return $this->hasOne(User::class);
    } 
}

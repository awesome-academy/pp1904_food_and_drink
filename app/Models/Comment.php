<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Comment extends Model
{
	protected $table = 'comments';

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'content',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Orderdetail;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'id',
        'product_name',
        'slug',
        'image',
        'category_id',
        'product_description',
        'price',
        'rate_average',
        'status',       
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function comments()
    {
        return $this->hasMany(Comment::class);
    } 

    public function orderdetails()
    {
        return $this->belongsToMany(Orderdetail::class);
    } 
}

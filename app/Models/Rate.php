<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Rate extends Model
{
    protected $table = 'rates';

    protected $fillable = [
        'id',
        'point_rate',
        'user_id',
        'number_user_rate',        
    ]; 

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    } 

}

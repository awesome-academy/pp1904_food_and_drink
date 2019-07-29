<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Customer;
use App\Models\Comment;
use App\Models\Rate;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    
    protected $fillable = [
        'user_name', 
        'email', 
        'password',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    } 

    public function comments()
    {
        return $this->hasMany(Comment::class);
    } 

    public function rates()
    {
        return $this->belongsToMany(Rate::class);
    } 
}

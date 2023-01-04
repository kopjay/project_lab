<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'birth', 'role', 'country',
    ];

    protected $hidden = [
        'password', 'remember_token', 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cart(){
        return $this->hasMany(Cart::class, 'user_id');
    }

    public function order(){
        return $this->hasOne(Order::class, 'user_id', 'id');
    }
}

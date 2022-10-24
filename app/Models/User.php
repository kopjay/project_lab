<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function cart(){
        return $this->hasOne(Cart::class, 'user_id', 'id');
    }

    public function order(){
        return $this->hasOne(Order::class, 'user_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'product';

    public function cart(){
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function order(){
        return $this->hasMany(Order::class, 'product_id', 'id');
    }
}

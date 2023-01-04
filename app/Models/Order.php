<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $fillable = [
        'history_id', 'product_name', 'product_price', 'quantity',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}


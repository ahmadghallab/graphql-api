<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productName'];
    
    public function order()
    {
        return $this->belongsTo(Order::class, 'product', 'productID');
    }
}

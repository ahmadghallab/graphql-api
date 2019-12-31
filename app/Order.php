<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['buyer', 'product'];
    
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer', 'buyerID');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'product', 'productID');
    }
}

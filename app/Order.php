<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['buyerID', 'productID'];

    protected $primaryKey = 'orderID';
    
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyerID', 'buyerID');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'productID');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['userID', 'status'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'orderID', 'productID')
            ->withTimestamps();
    }
}

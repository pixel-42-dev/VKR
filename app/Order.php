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

    public function calculatePrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;
    }

    public function saveOrder($id)
    {
        if ($this->status == 0) {
            $this->userID = $id;
            $this->status = 1;
            $this->save();
            return true;
        } else {
            return false;
        }

    }
}

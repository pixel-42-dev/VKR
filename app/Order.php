<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['userID', 'status'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'orderID', 'productID')
            ->withPivot('size')
            ->withTimestamps();
    }

    public function user()  // Устанавливается отношение с таблицей пользователи
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function calculatePrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;
    }

    public function saveOrder($id, $name, $phone, $address)
    {
        if ($this->status == 0) {
            $this->userID = $id;
            $this->userName =$name;
            $this->userPhone = $phone;
            $this->userAddress = $address;
            $this->status = 1;
            $this->save();
            return true;
        } else {
            return false;
        }

    }
}

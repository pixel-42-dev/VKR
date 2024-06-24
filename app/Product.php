<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model     // Модель для работы с таблицей products. Содержит методы за счёт наследования от Model
{
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'BrandID');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    protected $fillable = ['name', 'description', 'sizeID', 'categoryID', 'BrandID', 'image1', 'image2', 'image3', 'price'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product', 'productID', 'orderID')
            ->withTimestamps();
    }
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id')
            ->withTimestamps();
    }
}

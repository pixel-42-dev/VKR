<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'categoryID', 'BrandID', 'image1', 'image2', 'image3', 'price'];
    protected $dates = ['deleted_at'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'BrandID');
    }

    public function sizes()
    {
        return $this->hasMany(Size::class, 'clothes_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryID');
    }

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

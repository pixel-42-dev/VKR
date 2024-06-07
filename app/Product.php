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
}

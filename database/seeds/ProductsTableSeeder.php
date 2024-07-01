<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Рубашка1', 'description' => 'Лёгкая одежда для верхней части тела', 'categoryID' => 1, 'BrandID' => 1, 'trend' => 1, 'price' => 6000],
            ['name' => 'Рубашка2', 'description' => 'Лёгкая одежда для верхней части тела', 'categoryID' => 1, 'BrandID' => 1, 'trend' => 1, 'price' => 1200],
            ['name' => 'Рубашка3', 'description' => 'Лёгкая одежда для верхней части тела', 'categoryID' => 1, 'BrandID' => 1, 'trend' => 1, 'price' => 2400],
            ['name' => 'Рубашка4', 'description' => 'Лёгкая одежда для верхней части тела', 'categoryID' => 1, 'BrandID' => 1, 'trend' => 1, 'price' => 15000]
        ]);
    }
}

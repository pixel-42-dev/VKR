<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Рубашки', 'code' => '1', 'description' => 'Лёгкая одежда для верхней части тела', 'forMen' => 1],
            ['name' => 'Блузки', 'code' => '1', 'description' => 'Лёгкая одежда для верхней части тела', 'forMen' => 0],
            ['name' => 'Кросовки', 'code' => '2', 'description' => 'Лёгкая обувь', 'forMen' => 1],
            ['name' => 'Туфли', 'code' => '2', 'description' => 'Лёгкая обувь', 'forMen' => 0],
            ['name' => 'Рюкзаки', 'code' => '3', 'description' => 'Простой аксесуар', 'forMen' => 1],
            ['name' => 'Сумочки', 'code' => '3', 'description' => 'Простой аксесуар', 'forMen' => 0]
        ]);
    }
}

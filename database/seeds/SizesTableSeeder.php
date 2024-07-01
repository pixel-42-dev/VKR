<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            ['clothes_id' => 1, 'clothes_size' => 'XL', 'count' => 10],
            ['clothes_id' => 2, 'clothes_size' => 'L', 'count' => 10],
            ['clothes_id' => 3, 'clothes_size' => 'XL', 'count' => 10],
            ['clothes_id' => 4, 'clothes_size' => 'M', 'count' => 10]
        ]);
    }
}

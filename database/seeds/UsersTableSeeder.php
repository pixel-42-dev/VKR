<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nickname' => 'admin1',
            'name' => 'admin-name',
            'surname' => 'admin-surname',
            'email' => 'admin@mail.ru',
            'phone' => '88005553535',
            'address' => 'city 1, street1, house 1',
            'password' => bcrypt('admin123'),
            'isAdmin' => 1
        ]);
    }
}

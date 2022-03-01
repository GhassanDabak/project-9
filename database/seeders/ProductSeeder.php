<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'cat_id'=> '1',
            'name'=> 'aaaaa',
            'description'=> 'aaaaaaaaaaaaaaa',
            'price'=> '10',
            'img_url'=> 'dsadsad',
            'img_alt'=> 'dsadasdasda',
        ]);
    }
}

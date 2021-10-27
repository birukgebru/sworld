<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Vault Door',
                'price'=>'2000',
                'category' => 'Security Goods',
                'description' => 'detailed spec of the product goes here',
                'gallery' => 'image/machine/sorting.png'
            ],
            [
                'name'=>'T Shirt',
                'price'=>'10',
                'category' => 'clothing',
                'description' => 'detailed spec of the product goes here',
                'gallery' => 'image/fav.png'
            ],
            [
                'name'=>'T Shirt',
                'price'=>'10',
                'category' => 'clothing',
                'description' => 'detailed spec of the product goes here',
                'gallery' => 'image/fav.png'
            ]
        ]);
    }
}

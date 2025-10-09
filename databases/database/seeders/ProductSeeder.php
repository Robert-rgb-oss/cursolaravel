<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Example',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet.',
            'price'=> 25
        ]);
        Product::create([
            'name'=>'Example 2',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet.',
            'price'=> 50
        ]);
        Product::create([
            'name'=>'Example 3',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet.',
            'price'=> 150
        ]);
    }
}

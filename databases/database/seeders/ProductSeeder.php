<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        Product::create([
            'name'=>'example',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet',
            'price'=> 25
        ]);
    }
    {
         Product::create([
            'name'=>'example 1',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet',
            'price'=> 50
        ]);
    }
    {
         Product::create([
            'name'=>'example 3',
            'short_description'=> 'Lorem Ipsum',
            'description'=> 'Lorem ipsum dolor set aimet',
            'price'=> 150
        ]);
    }
}

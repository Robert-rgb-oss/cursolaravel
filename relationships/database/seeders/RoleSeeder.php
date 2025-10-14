<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use ºApp\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Role::create([
            'id'=> 1,
            'name' => 'admin'
       ]);
         Role::create([
                'id'=> 2,
                'name' => 'staff'
         ]);
         Role::create([
                'id'=> 3,
                'name' => 'user'
         ]);
         Role::create([
                'id'=> 4,
                'name' => 'guest'
         ]);
    }
}

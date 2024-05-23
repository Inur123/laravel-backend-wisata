<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::factory()->create([
            'name' => 'FIC 17',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        //category factory 2
        Category::factory(20)->create();

        //product factory 100
        Product::factory(100)->create();
    }
}

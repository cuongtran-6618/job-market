<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(Category::TABLE_NAME)->insert([
            'name' => 'cleaning',
            'description' => 'Cleaning home',
            'active' => true,
        ]);

        DB::table(Category::TABLE_NAME)->insert([
            'name' => 'cooking',
            'description' => 'Cooking',
            'active' => true,
        ]);
    }
}

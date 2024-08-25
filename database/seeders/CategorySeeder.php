<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Strength'],
            ['name' => 'Cardio'],
            ['name' => 'Flexibility'],
            ['name' => 'Mobility'],
            ['name' => 'Core'],
            ['name' => 'Warm Up']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

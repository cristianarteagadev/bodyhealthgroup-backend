<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'id' => 1,
            'name' => 'Juegos',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Politica',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Actualidad',
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Moda',
        ]);

        Category::create([
            'id' => 5,
            'name' => 'Economia',
        ]);
    }
}

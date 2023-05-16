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
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Politica',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Actualidad',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Moda',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Category::create([
            'id' => 5,
            'name' => 'Economia',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);
    }
}

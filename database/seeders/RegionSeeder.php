<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    
    public function run(): void
    {
        Region::create([
            'id' => 1,
            'name' => 'Chile',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Region::create([
            'id' => 2,
            'name' => 'Argentina',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);

        Region::create([
            'id' => 3,
            'name' => 'Estados Unidos',
            'created_at' => '2023-05-16 02:33:34',
            'updated_at' => '2023-05-16 02:33:34',
        ]);
    }
}

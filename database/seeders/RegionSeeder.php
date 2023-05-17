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
        ]);

        Region::create([
            'id' => 2,
            'name' => 'Argentina',
        ]);

        Region::create([
            'id' => 3,
            'name' => 'Estados Unidos',
        ]);
    }
}

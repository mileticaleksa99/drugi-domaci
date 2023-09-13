<?php

namespace Database\Seeders;

use App\Models\VillainLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            VillainLevel::LOW,
            VillainLevel::MEDIUM,
            VillainLevel::HIGH,
            VillainLevel::DANGEROUS,
            VillainLevel::VERY_DANGEROUS,
            VillainLevel::GOD_LEVEL
        ];

        foreach ($levels as $level) {
            VillainLevel::create([
                'level' => $level
            ]);
        }
    }
}

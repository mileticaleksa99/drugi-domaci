<?php

namespace Database\Seeders;

use App\Models\Villain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
              Villain::create(
                  [
                      'name' => $faker->name,
                      'level_id' => $faker->numberBetween(1, 6),
                      'status_id' => $faker->numberBetween(1, 5),
                      'description' => $faker->text
                  ]
              );
        }
    }
}

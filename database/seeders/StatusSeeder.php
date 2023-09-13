<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            Status::ALIVE,
            Status::DEAD,
            Status::UNKNOWN,
            Status::MISSING,
            Status::IN_PRISON
        ];

        foreach ($statuses as $status) {
            Status::create([
                'status' => $status
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('issues')->insert([
            [
                'computer_id' => 1,
                'reported_by' => 'John Doe',
                'reported_date' => '2024-12-01 10:30:00',
                'description' => 'The computer is running slow and freezes frequently.',
                'urgency' => 'Medium',
                'status' => 'Open',
            ],
            [
                'computer_id' => 2,
                'reported_by' => 'Jane Smith',
                'reported_date' => '2024-12-05 14:45:00',
                'description' => 'The system does not boot up.',
                'urgency' => 'High',
                'status' => 'In Progress',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            [
                'medicine_id' => 1, // Paracetamol
                'quantity' => 2,
                'sale_date' => now(),
                'customer_phone' => '0123456789',
            ],
            [
                'medicine_id' => 2, // Ibuprofen
                'quantity' => 1,
                'sale_date' => now(),
                'customer_phone' => '0987654321',
            ],
            [
                'medicine_id' => 3, // Amoxicillin
                'quantity' => 3,
                'sale_date' => now(),
                'customer_phone' => '0123456789',
            ],
        ]);
    }
}

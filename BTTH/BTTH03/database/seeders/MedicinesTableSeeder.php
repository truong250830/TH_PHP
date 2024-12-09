<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'brand' => 'XYZ Pharma',
                'dosage' => '500mg',
                'form' => 'Tablet',
                'price' => 50.00,
                'stock' => 100,
            ],
            [
                'name' => 'Ibuprofen',
                'brand' => 'ABC Pharma',
                'dosage' => '200mg',
                'form' => 'Capsule',
                'price' => 70.00,
                'stock' => 200,
            ],
            [
                'name' => 'Amoxicillin',
                'brand' => 'HealthCare Inc.',
                'dosage' => '250mg',
                'form' => 'Syrup',
                'price' => 150.00,
                'stock' => 50,
            ],
        ]);
    }
}

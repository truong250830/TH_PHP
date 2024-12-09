<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'date_of_birth' => '2017-05-15', // Định dạng chuỗi trực tiếp
                'parent_phone' => '0123456789',
                'class_id' => 1, // Pre-K
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2016-09-20', // Định dạng chuỗi trực tiếp
                'parent_phone' => '0987654321',
                'class_id' => 2, // Kindergarten
            ],
        ]);
    }
}

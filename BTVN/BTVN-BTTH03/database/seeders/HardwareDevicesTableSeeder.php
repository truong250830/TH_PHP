<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HardwareDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hardware_devices')->insert([
           
            [
                'device_name' => 'Logitech G502',
                'type' => 'Mouse',
                'status' => true,
                'center_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Razer BlackWidow',
                'type' => 'Keyboard',
                'status' => true,
                'center_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'HyperX Cloud II',
                'type' => 'Headset',
                'status' => false,
                'center_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'device_name' => 'Microsoft Sculpt Ergonomic',
                'type' => 'Mouse',
                'status' => true,
                'center_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Corsair K95 RGB Platinum',
                'type' => 'Keyboard',
                'status' => false,
                'center_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'SteelSeries Arctis 7',
                'type' => 'Headset',
                'status' => true,
                'center_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'device_name' => 'Logitech MX Master 3',
                'type' => 'Mouse',
                'status' => true,
                'center_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Ducky One 2 Mini',
                'type' => 'Keyboard',
                'status' => true,
                'center_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'device_name' => 'Sennheiser HD 599',
                'type' => 'Headset',
                'status' => false,
                'center_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

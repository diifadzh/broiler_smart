<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;
use App\Models\ConfigHeater;
use App\Models\ConfigLamp;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::create([
            'id' => 'A001',
            'user_id' => 1,
            'name' => 'Kandang Ayam umur 1 - 7 hari',
            'address' => 'Brebes',
            'phone_number' => '087712345678',
            'gender' => 'Male',
            'position' => 'Pekerja',
        ]);
        ConfigHeater::create([
            'device_id' => 'A001',
            'max_temp' => 29,
            'min_temp' => 20,
        ]);
        ConfigLamp::create([
            'device_id' => 'A001',
            'time_on' => '00:07:00',
            'time_off' => '00:18:00',
        ]);
    }
}

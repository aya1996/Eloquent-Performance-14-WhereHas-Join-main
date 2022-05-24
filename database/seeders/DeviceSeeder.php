<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = Device::factory(1000)->make();
        $devices->chunk(50)->each(function($chunk) {
            Device::insert($chunk->toArray());
        });
    }
}

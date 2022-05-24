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
        $devices = Device::factory(50)->create();
        // $devices->chunk(10)->each(function($chunk) {
        //     Device::insert($chunk->toArray());
        // });
    }
}

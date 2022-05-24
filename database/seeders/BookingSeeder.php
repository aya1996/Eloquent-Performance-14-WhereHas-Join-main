<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = Booking::factory(1000)->create();
        // $bookings->chunk(500)->each(function($chunk) {
        //     Booking::insert($chunk->toArray());
        // });
    }
}

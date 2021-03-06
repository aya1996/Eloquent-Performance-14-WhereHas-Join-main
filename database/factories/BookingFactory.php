<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Device;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'device_id' => $this->faker->numberBetween(1, Device::count()),
            'start_time' => now()->startOfHour()->addHours(rand(1, 1000))
        ];
    }
}

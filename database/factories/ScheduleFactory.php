<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'movie_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'cinema_id' => $this->faker->numberBetween($min = 1, $max = 4),
            // 'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            // 'time' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'time' => $this->faker->dateTimeInInterval($startDate = 'now', $max = '1 year', $timezone = null),

        ];
    }
}

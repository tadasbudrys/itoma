<?php

namespace Database\Factories;

use App\Models\Cars;
use App\Models\Statuses;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cars_id' => Cars::factory(),
            'status_id' => Statuses::factory(),
            'date_from' => $this->faker->date('Y-m-d'),
            'date_to' => $this->faker->date('Y-m-d')
        ];
    }
}

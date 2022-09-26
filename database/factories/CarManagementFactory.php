<?php

namespace Database\Factories;

use App\Models\Cars;
use App\Models\Departments;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarManagementFactory extends Factory
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
            'department_id' => Departments::factory(),
            'user_id' => Users::factory(),
            'date_from' => $this->faker->date('Y-m-d'),
            'date_to' => $this->faker->date('Y-m-d')
        ];
    }
}

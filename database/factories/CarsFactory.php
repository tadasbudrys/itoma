<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{
    protected $model = Cars::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'number' => $this->faker->bothify('?????-#####'),
            'year_made' => $this->faker->date("Y-m-d"),
            'model' => $this->faker->firstName(),
            'price' => $this->faker->randomFloat(2),
        ];

    }
}

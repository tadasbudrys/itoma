<?php

namespace Database\Seeders;

use Database\Factories\CarStatusFactory;
use Illuminate\Database\Seeder;

class CarStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarStatusFactory::factory(100)->create();
    }
}

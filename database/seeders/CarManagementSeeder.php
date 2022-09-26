<?php

namespace Database\Seeders;

use Database\Factories\CarManagementFactory;
use Illuminate\Database\Seeder;

class CarManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarManagementFactory::factory(100)->create();
    }
}

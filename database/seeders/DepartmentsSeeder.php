<?php

namespace Database\Seeders;

use Database\Factories\DepartmentsFactory;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DepartmentsFactory::factory(100)->create();
    }
}

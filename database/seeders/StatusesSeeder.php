<?php

namespace Database\Seeders;

use Database\Factories\StatusesFactory;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusesFactory::factory(100)->create();
    }
}

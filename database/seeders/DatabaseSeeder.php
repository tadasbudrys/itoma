<?php

namespace Database\Seeders;

use App\Models\CarManagement;
use App\Models\Cars;
use App\Models\CarStatus;
use App\Models\Departments;
use App\Models\Statuses;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Departments::factory()->count(100)->create();
        Cars::factory()->count(100)->create();
        Users::factory()->count(100)
            ->sequence(fn($sequence) => ['department_id' => Departments::all()->random()])
            ->create();

        Statuses::factory()
            ->has(
                Statuses::factory()
                    ->count(100)
                    ->state(function (array $attributes, Statuses $status) {
                        return ['parent_id' => $status->id];
                    }), 'children'
            )
            ->create();

        Cars::factory()
            ->has(CarManagement::factory()->count(3)
                ->sequence(fn($sequence) => ['cars_id' => $sequence->index + 1])
                ->sequence(fn($sequence) => ['department_id' => Departments::all()->random()],
                    ['department_id' => null])
                ->sequence(fn($sequence) => ['user_id' => null],
                    fn($sequence) => ['user_id' => Users::all()->random()])
                ->sequence(fn($sequence) => ['date_to' => Carbon::now()->addMonth()->subDays($sequence->index)])
                ->sequence(fn($sequence) => ['date_from' => Carbon::now()->addMonth()->subDays($sequence->index + 7)]),
                'carManagement')
            ->has(CarStatus::factory()->count(3)
                ->sequence(fn($sequence) => ['cars_id' => $sequence->index + 1])
                ->sequence(fn($sequence) => ['status_id' => Statuses::all()->random()])
                ->sequence(fn($sequence) => ['date_to' => Carbon::now()->addMonth()->subDays($sequence->index)])
                ->sequence(fn($sequence) => ['date_from' => Carbon::now()->addMonth()->subDays($sequence->index + 7)]),
                'carStatus')
            ->count(100)
            ->create();
    }
}

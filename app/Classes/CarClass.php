<?php

namespace App\Classes;

use App\Interfaces\CarsInterface;
use App\Models\Cars;
use Carbon\Carbon;

class CarClass implements CarsInterface
{
    public function getCars(string $date = ''): object
    {
        return Cars::with([
            'carManagement' => function ($query) {
                return $query
                    ->with('haveUser')
                    ->with('haveDepartment')
                    ->orderBy('date_to', 'desc')
                    ->get();
            }
        ])
            ->with([
                'carStatus' => function ($query) {
                    return $query
                        ->with('haveStatus:id,name')
                        ->orderBy('date_to', 'desc')
                        ->get();
                }
            ])
            ->has('carManagement')
            ->whereRelation('carStatus', 'date_from', '<=', Carbon::today())
            ->whereRelation('carStatus', 'date_to', '>=', Carbon::today())
            ->whereRelation('carManagement', 'date_from', '<=', Carbon::today())
            ->whereRelation('carManagement', 'date_to', '>=', Carbon::today())
            ->paginate(30)
            ->map(function ($carManagement) {
                $carManagement->setRelation('carManagement', $carManagement->carManagement->take(2));
                return $carManagement;
            })
            ->map(function ($carStatus) {
                $carStatus->setRelation('carStatus', $carStatus->carStatus->take(2));
                return $carStatus;
            });
    }
}

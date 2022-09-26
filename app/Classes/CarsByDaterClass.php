<?php

namespace App\Classes;

use App\Interfaces\CarsInterface;
use App\Models\Cars;

class CarsByDaterClass implements CarsInterface
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
            ->whereRelation('carStatus', 'date_from', '<=', $date)
            ->whereRelation('carStatus', 'date_to', '>=', $date)
            ->whereRelation('carManagement', 'date_from', '<=', $date)
            ->whereRelation('carManagement', 'date_to', '>=', $date)
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

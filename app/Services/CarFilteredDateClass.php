<?php

namespace App\Services;

use App\AbstractClasses\CarsFinder;
use App\Classes\CarsByDaterClass;
use App\Interfaces\CarsInterface;

/**
 * Class CarFilteredDateClass
 * @package App\Services
 */
class CarFilteredDateClass extends CarsFinder
{

    public function getCarClass(): CarsInterface
    {
        return new CarsByDaterClass();
    }
}

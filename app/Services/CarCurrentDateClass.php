<?php

namespace App\Services;

use App\AbstractClasses\CarsFinder;
use App\Classes\CarClass;
use App\Interfaces\CarsInterface;

/**
 * Class CarCurrentDateClass
 * @package App\Services
 */
class CarCurrentDateClass extends CarsFinder
{
    public function getCarClass(): CarsInterface
    {
        return new CarClass();
    }
}

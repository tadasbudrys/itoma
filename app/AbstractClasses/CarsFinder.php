<?php

namespace App\AbstractClasses;

use App\Interfaces\CarsInterface;

abstract class CarsFinder
{
    public function find($param = ''): object
    {
        $car = $this->getCarClass();
        return $car->getCars($param);
    }

    abstract public function getCarClass(): CarsInterface;
}

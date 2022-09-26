<?php

namespace App\Services;

use App\AbstractClasses\CarsFinder;

/**
 * Class CarClassFinder
 * @package App\Services
 */
class CarClassFinder
{
    public function clientCode(CarsFinder $carsFinder, $date = ''): object
    {
        return $carsFinder->find($date);
    }
}

<?php

namespace App\Services;

use App\Models\Cars;

/**
 * Class CarsService
 * @package App\Services
 */
class CarsService
{
    public function carsList(): object
    {
        return Cars::paginate(30);
    }

    public function getCars(array $params = array()): object
    {

        if (empty($params)) {
            return (new CarClassFinder)->clientCode(new CarCurrentDateClass);
        } elseif (strtotime($params['date'])) {
            return (new CarClassFinder)->clientCode(new CarFilteredDateClass, $params['date']);
        }

    }
}

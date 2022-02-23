<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\Car;

class VehicleRepository extends AbstractRepository
{

    public static function modelClass()
    {
        returnVehicle::class;
    }

    public static function getInstance()
    {
        return newVehicleRepository();
    }

}
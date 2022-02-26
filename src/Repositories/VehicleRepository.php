<?php

namespace MyCity\Repositories;


use MyCity\EloquentModels\Vehicle;

class VehicleRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Vehicle::class;
    }

    public static function getInstance()
    {
        return Vehicle();
    }

}
<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\City;

class CityRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return City::class;
    }

    public static function getInstance()
    {
        return new CityRepository();
    }

}
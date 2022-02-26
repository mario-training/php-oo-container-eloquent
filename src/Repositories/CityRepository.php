<?php

namespace MyCity\Repositories;


use MyCity\EloquentModels\City;

class CityRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return City::class;
    }

    public static function getInstance()
    {
        return new City();
    }

}
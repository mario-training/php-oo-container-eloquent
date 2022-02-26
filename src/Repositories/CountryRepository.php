<?php

namespace MyCity\Repositories;



use MyCity\EloquentModels\Country;

class CountryRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Country::class;
    }

    public static function getInstance()
    {
        return new Country();
    }

}
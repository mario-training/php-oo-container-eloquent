<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\Country;

class CountryRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Country::class;
    }

    public static function getInstance()
    {
        return new CountryRepository();
    }

}
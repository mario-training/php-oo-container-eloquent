<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\Person;

class PersonRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Person::class;
    }

    public static function getInstance()
    {
        return new PersonRepository();
    }

}
<?php

namespace MyCity\Repositories;

use MyCity\EloquentModels\Person;

class PersonRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Person::class;
    }

    public static function getInstance()
    {
        return new Person();
    }

}
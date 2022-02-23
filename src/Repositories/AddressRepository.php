<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\Address;

class AddressRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Address::class;
    }

    public static function getInstance()
    {
        return new AddressReposotory();
    }

}
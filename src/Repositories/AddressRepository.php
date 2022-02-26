<?php

namespace MyCity\Repositories;


use MyCity\EloquentModels\Address;

class AddressRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Address::class;
    }

    public static function getInstance()
    {
        return new Address();
    }

}
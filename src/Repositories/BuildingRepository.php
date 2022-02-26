<?php

namespace MyCity\Repositories;

use MyCity\EloquentModels\Building;

class BuildingRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Building::class;
    }

    public static function getInstance()
    {
        return new Building();
    }

}
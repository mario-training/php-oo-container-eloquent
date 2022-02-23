<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\Building;

class BuildingRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return Building::class;
    }

    public static function getInstance()
    {
        return new BuildingRepository();
    }

}
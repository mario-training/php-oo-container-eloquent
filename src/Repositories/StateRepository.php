<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;
use MyCity\EloquentModel\State;

class StateRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return State::class;
    }

    public static function getInstance()
    {
        return new StateRepository();
    }

}
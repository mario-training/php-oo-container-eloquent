<?php

namespace MyCity\Repositories;

use MyCity\EloquentModels\State;

class StateRepository extends AbstractRepository
{

    public static function modelClass()
    {
        return State::class;
    }

    public static function getInstance()
    {
        return new State();
    }

}
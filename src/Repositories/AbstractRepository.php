<?php

namespace MyCity\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository extends Model
{
    /**
     * Class
     * @return string
     *
     */
    abstract public static function modelClass();
    /**
     * @return Model
     *
     */
    abstract public static function getInstance();

    public static function getModel()
    {
        return new self::modelClass();
    }
}

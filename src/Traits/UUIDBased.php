<?php

namespace MyCity\Traits;

use Webpatser\Uuid\Uuid;

trait UUIDBased
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->incrementing = false;
            $model->{$model->getKeyName()} = Uuid::generate(4)->string;
        });
    }
}
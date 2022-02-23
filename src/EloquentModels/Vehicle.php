<?php

namespace MyCity\EloquentModel;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'vehicles';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'model',
        'type',
        'year',
        'color',
        'max_speed',
        'brand',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'id'        => 'string',
        'model'     => 'string',
        'type'     => 'string',
        'color'     => 'string',
        'max_speed' => 'string',
        'brand'     => 'string',
        'year'      => 'integer',
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
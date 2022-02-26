<?php

namespace MyCity\EloquentModels;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'people';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'birth_date',
        'death_date',
        'height',
        'weight',
        'gender'
    ];
    protected $casts = [
        'id'         => 'string',
        'name'       => 'string',
        'email'      => 'string',
        'gender'     => 'string',
        'height'     => 'object',
        'weight'     => 'object',
    ];
    protected $dates = [
        'brith_date',
        'death_date'
    ];
}
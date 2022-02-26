<?php

namespace MyCity\EloquentModels;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'cities';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'state_id',
        'name',
        'color',
        'max_speed',
        'brand'
    ];
    protected $casts = [
        'id'        => 'uuid',
        'state_id'     => 'uuid',
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
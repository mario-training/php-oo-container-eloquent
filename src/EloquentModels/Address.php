<?php

namespace MyCity\EloquentModel;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'addressees';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'neighborhood',
        'street',
        'number',
        'additional_info',
    ];
    protected $casts = [
        'id'              => 'uuid',
        'neighborhood'    => 'string',
        'street'          => 'string',
        'name'            => 'string',
        'additional_info' => 'object',

    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
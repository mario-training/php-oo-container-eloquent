<?php

namespace MyCity\EloquentModel;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'states';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'country_id',
        'name',
        'abbreviation',
    ];
    protected $casts = [
        'id'           => 'uuid',
        'country_id'   => 'uuid',
        'name'         => 'string',
        'abbreviation' => 'string',

    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
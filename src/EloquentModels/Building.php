<?php

namespace MyCity\EloquentModels;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'buildings';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'type',
        'address',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'id'      => 'string',
        'name'    => 'string',
        'type'    => 'string',
        'address' => 'object'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
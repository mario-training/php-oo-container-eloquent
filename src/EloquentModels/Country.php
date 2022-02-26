<?php

namespace MyCity\EloquentModels;

use MyCity\Traits\UUIDBased;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use UUIDBased;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $table = 'countries';
    public $timestamps = true;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'abbreviation',
        'created_at',
        'updated_at'

    ];
    protected $casts = [
        'id'           => 'string',
        'name'         => 'string',
        'abbreviation' => 'string',
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
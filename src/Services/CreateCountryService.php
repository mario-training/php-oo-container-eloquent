<?php

namespace MyCity\Services;

use MyCity\Repositories\CountryRepository;

class CreateCountryService
{
    public static function create(array $dada)
    {
        return CountryRepository::getInstance()->firstOrCreate($dada);
    }
}
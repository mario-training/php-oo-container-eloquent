<?php declare(strict_types=1);

namespace Tests\Unit\Services;


use MyCity\EloquentModels\Country;
use MyCity\Services\CreateCountryService;
use PHPUnit\Framework\TestCase;

class CreateCoutryServiceTest extends TestCase
{
    /**
     * @group Services
     */
    public function testCreate()
    {
       $country = CreateCountryService::create([
            'name'         => 'Europa',
            'abbreviation' => 'EU',
        ]);
       $this->assertInstanceOf(Country::class, $country);
    }
}

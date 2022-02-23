<?php declare(strict_types=1);

namespace Tests\Unit\EloquentModel;


use PHPUnit\Framework\TestCase;
use MyCity\EloquentModel\Vehicle;

class VehicleTest extends TestCase
{
    /**
     * @group EloquentModels
     */
    public function tetProperties()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}

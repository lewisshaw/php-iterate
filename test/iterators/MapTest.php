<?php
namespace IterateTest\iterators;

use Iterate\Iterators\Map;

class MapTest extends \PHPUnit_Framework_TestCase
{
    public function testMapReturnsCorrectValues()
    {
        $selector = new Map;
        $numbers = [1,2,3,4,5];
        $expectedResult = [2,4,6,8,10];
        $result = $selector->iterate($numbers, function ($number) { return $number * 2; } );
        $this->assertEquals($result, $expectedResult);
    }
}

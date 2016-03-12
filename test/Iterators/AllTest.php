<?php
namespace IterateTest\Iterators;

use Iterate\Iterators\All;

class AllTest extends \PHPUnit_Framework_TestCase
{
    public function testAllReturnsTrueWhenAllTrue()
    {
        $selector = new All;
        $numbers = [2,4,6,8];
        $result = $selector->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertTrue($result);
    }

    public function testAllReturnsFalseWhenAnyFalse()
    {
        $selector = new All;
        $numbers = [2,4,6,9];
        $result = $selector->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertFalse($result);
    }
}

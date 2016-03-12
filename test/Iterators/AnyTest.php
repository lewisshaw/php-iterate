<?php
namespace IterateTest\Iterators;

use Iterate\Iterators\Any;

class AnyTest extends \PHPUnit_Framework_TestCase
{
    public function testAnyReturnsTrueWhenAnyTrue()
    {
        $selector = new Any;
        $numbers = [1,3,5,6];
        $result = $selector->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertTrue($result);
    }

    public function testAnyReturnsFalseWhenAllFalse()
    {
        $selector = new Any;
        $numbers = [3,5,7,11];
        $result = $selector->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertFalse($result);
    }
}

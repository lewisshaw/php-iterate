<?php
namespace IterateTest\iterators;

use Iterate\Iterators\Select;

class SelectTest extends \PHPUnit_Framework_TestCase
{
    public function testSelectReturnCorrectValues()
    {
        $selector = new Select;
        $numbers = [1,2,3,4,5,6,7,8,9,10];
        $expectedResult = [1 => 2,3 => 4, 5 => 6, 7 => 8, 9 => 10];
        $result = $selector->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertEquals($result, $expectedResult);
    }
}

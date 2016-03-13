<?php
namespace IterateTest\iterators;

use Iterate\Iterators\Find;

class FindTest extends \PHPUnit_Framework_TestCase
{
    public function testFindReturnsExpectedResult()
    {
        $finder = new Find;
        $numbers = [1,2,4,6,8];
        $result = $finder->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertEquals(2, $result);
    }

    public function testFindReturnsNullIfNoneFound()
    {
        $finder = new Find;
        $numbers = [1,3,5,7];
        $result = $finder->iterate($numbers, function ($number) { return $number % 2 == 0; } );
        $this->assertEquals(null, $result);
    }

}

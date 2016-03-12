<?php
namespace IterateTest\Iterators;

use Iterate\Iterators\EachElement;

class EachElementTest extends \PHPUnit_Framework_TestCase
{
    public function testEachElementRunsCorrectly()
    {
        $iterator = new EachElement;
        $numbers = [2,4,6,8];
        $count = 0;
        $result = $iterator->iterate($numbers, function ($number) use (&$count) { $count += $number; } );
        $this->assertEquals(20, $count);
    }
}

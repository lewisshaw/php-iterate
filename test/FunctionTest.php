<?php
namespace IterateTest;

use Iterate\ArrayIterator;

class FunctionTest extends \PHPUnit_Framework_TestCase
{
    public function testFromArrayReturnsArrayIterator()
    {
        $iterator = \Iterate\fromArray([1,2,3]);
        $this->assertInstanceOf('Iterate\ArrayIterator', $iterator);
    }
}

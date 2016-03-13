<?php
namespace IterateTest;

use Iterate\ArrayIterator;

class ArrayIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testSelectReturnsArrayIterator()
    {
        $array = new ArrayIterator([1,2,3,4]);
        $selected = $array->select(function ($number) { return $number % 2 == 0; });
        $this->assertInstanceOf('Iterate\ArrayIterator', $selected);
    }

    public function testMapReturnsArrayIterator()
    {
        $array = new ArrayIterator([1,2,3,4]);
        $mapped = $array->map(function ($number) { return $number * 2; });
        $this->assertInstanceOf('Iterate\ArrayIterator', $mapped);
    }

    public function testAllReturnsBoolean()
    {
        $array = new ArrayIterator([1,2,3,4]);
        $allEven = $array->all(function ($number) { return $number % 2 == 0; });
        $this->assertInternalType('boolean', $allEven);
    }

    public function testAnyReturnsBoolean()
    {
        $array = new ArrayIterator([1,2,3,4]);
        $anyEven = $array->any(function ($number) { return $number % 2 == 0; });
        $this->assertInternalType('boolean', $anyEven);
    }

    public function testFindReturnsElementType()
    {
        $array = new ArrayIterator([1,2,3,4]);
        $firstEven = $array->find(function ($number) { return $number % 2 == 0; });
        $this->assertInternalType('integer', $firstEven);
    }
}

<?php
namespace Iterate;

class ArrayIterator extends \ArrayIterator
{
    private function runIterator(Iterators\IteratorInterface $iterator, Callable $callback)
    {
        return $iterator->iterate($this->getArrayCopy(), $callback);
    }

    public function select(Callable $callback)
    {
        return new ArrayIterator($this->runIterator(new Iterators\Select, $callback));
    }

    public function map(Callable $callback)
    {
        return new ArrayIterator($this->runIterator(new Iterators\Map, $callback));
    }

    public function all(Callable $callback)
    {
        return $this->runIterator(new Iterators\All, $callback);
    }

    public function Find(Callable $callback)
    {
        return $this->runIterator(new Iterators\Find, $callback);
    }
}

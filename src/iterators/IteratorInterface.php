<?php
namespace Iterate\Iterators;

interface IteratorInterface
{
    public function iterate($data, Callable $callback);
}

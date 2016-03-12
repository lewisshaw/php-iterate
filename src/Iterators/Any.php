<?php
namespace Iterate\Iterators;

class Any implements IteratorInterface
{
    public function iterate($data, Callable $callback)
    {
        foreach ($data as $dataRow) {
            if ($callback($dataRow)) {
                return true;
            }
        }
        return false;
    }
}

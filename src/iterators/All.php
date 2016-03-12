<?php
namespace Iterate\Iterators;

class All implements IteratorInterface
{
    public function iterate($data, Callable $callback)
    {
        foreach ($data as $dataRow) {
            if (!$callback($dataRow)) {
                return false;
            }
        }
        return true;
    }
}

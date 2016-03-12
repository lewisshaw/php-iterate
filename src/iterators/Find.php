<?php
namespace Iterate\Iterators;

class Find implements IteratorInterface
{
    public function iterate($data, Callable $callback)
    {
        foreach ($data as $key => $dataRow) {
            if ($callback($dataRow)) {
                return $dataRow;
            }
        }
    }
}

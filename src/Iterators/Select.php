<?php
namespace Iterate\Iterators;

class Select implements IteratorInterface
{
    public function iterate($data, Callable $callback)
    {
        $newArray = [];
        foreach ($data as $key => $dataRow) {
            if ($callback($dataRow)) {
                $newArray[$key] = $dataRow;
            }
        }

        return $newArray;
    }
}

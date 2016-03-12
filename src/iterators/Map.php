<?php
namespace Iterate\Iterators;

class Map implements IteratorInterface
{
    public function iterate ($data, Callable $callback)
    {
        $newArray = [];
        foreach($data as $key => $dataRow) {
            $newArray[$key] = $callback($dataRow);
        }

        return $newArray;
    }
}

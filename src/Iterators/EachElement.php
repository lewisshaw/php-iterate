<?php
namespace Iterate\Iterators;

class EachElement implements IteratorInterface
{
    public function iterate($data, Callable $callback)
    {
        foreach ($data as $key => $dataRow) {
            $callback($dataRow);
        }
    }
}  

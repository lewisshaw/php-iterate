<?php
namespace Iterate;

use Iterate\Iterators\Select;
use Iterate\Iterators\Map;

function select(Array $data, Callable $callback)
{
    $select = new Select;
    return $select->iterate($data, $callback);
}

function map(Array $data, Callable $callback)
{
    $map = new Map;
    return $map->iterate($data, $callback);
}

<?php
namespace Iterate;

function fromArray(Array $array)
{
    return new ArrayIterator($array);
}

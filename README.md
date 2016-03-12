Example
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
$numbers  =[1,2,3,4,5];

$iterator = Iterate\fromArray($numbers);

//select all even numbers and times them by two

$newValues = $iterator->select(function($number) {
    return $number % 2 == 0;
})
->map(function($number) {
    return $number * 2;
});

//check if all values are less than 9

$result = $newValues->all(function ($value) {
    return $value < 9;
});

var_dump($newValues);
/*
object(Iterate\ArrayIterator)#5 (1) {
  ["storage":"ArrayIterator":private]=>
  array(2) {
    [1]=>
    int(4)
    [3]=>
    int(8)
  }
}
*/

var_dump($result);
/*
bool(true)
*/
```

<?php
// Object Cloning
class CloneExample {
    public $data;
}

$obj1 = new CloneExample();
$obj1->data = "Hello";

$obj2 = clone $obj1;
echo $obj2->data; // Output: Hello
?>
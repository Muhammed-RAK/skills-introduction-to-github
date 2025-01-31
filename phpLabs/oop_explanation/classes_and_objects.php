<?php
// Classes and Objects
class Car {
    public $brand;
    public $model;

    public function startEngine() {
        return "Engine started!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->model = "Corolla";
echo $myCar->startEngine(); // Output: Engine started!
?>
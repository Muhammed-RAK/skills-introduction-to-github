<?php
// Define a class
class Car {
    // Properties
    public $make;
    public $model;
    private $year;
    protected $color;

    // Constructor
    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    // Public method
    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }

    // Getter for private property
    public function getYear() {
        return $this->year;
    }

    // Setter for private property
    public function setYear($year) {
        $this->year = $year;
    }

    // Protected method
    protected function getColor() {
        return $this->color;
    }
}

// Inheritance
class ElectricCar extends Car {
    // Additional property
    public $batteryCapacity;

    // Constructor
    public function __construct($make, $model, $year, $color, $batteryCapacity) {
        parent::__construct($make, $model, $year, $color);
        $this->batteryCapacity = $batteryCapacity;
    }

    // Overriding method
    public function getCarInfo() {
        return parent::getCarInfo() . ' with battery capacity of ' . $this->batteryCapacity . ' kWh';
    }

    // Accessing protected method from parent class
    public function getCarColor() {
        return $this->getColor();
    }
}

// Interface
interface Vehicle {
    public function start();
    public function stop();
}

// Implementing interface
class Motorcycle implements Vehicle {
    public function start() {
        echo "Motorcycle started";
    }

    public function stop() {
        echo "Motorcycle stopped";
    }
}

// Abstract class
abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        echo "Sleeping";
    }
}

// Implementing abstract class
class Dog extends Animal {
    public function makeSound() {
        echo "Bark";
    }
}

// Using the classes
$tesla = new ElectricCar('Tesla', 'Model S', 2020, 'Red', 100);
echo $tesla->getCarInfo(); // Tesla Model S (2020) with battery capacity of 100 kWh

$dog = new Dog();
$dog->makeSound(); // Bark
$dog->sleep(); // Sleeping

$motorcycle = new Motorcycle();
$motorcycle->start(); // Motorcycle started
$motorcycle->stop(); // Motorcycle stopped
?>
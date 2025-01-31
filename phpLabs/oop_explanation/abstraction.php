<?php
// Abstraction
abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->area(); // Output: 78.5
?>
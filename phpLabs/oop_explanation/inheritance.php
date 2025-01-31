<?php
// Inheritance
class Animal {
    public function speak() {
        return "Animal sound!";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Woof!";
    }
}

$dog = new Dog();
echo $dog->speak(); // Output: Woof!
?>
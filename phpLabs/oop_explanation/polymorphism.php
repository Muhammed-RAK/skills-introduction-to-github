<?php
// Polymorphism
interface AnimalSound {
    public function makeSound();
}

class Dog implements AnimalSound {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat implements AnimalSound {
    public function makeSound() {
        return "Meow!";
    }
}

function animalSound(AnimalSound $animal) {
    echo $animal->makeSound();
}

animalSound(new Dog()); // Output: Woof!
animalSound(new Cat()); // Output: Meow!
?>
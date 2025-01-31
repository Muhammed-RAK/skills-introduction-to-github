<?php
// Method Overriding
class Bird extends Animal {
    public function speak() {
        return "Chirp!";
    }
}

$bird = new Bird();
echo $bird->speak(); // Output: Chirp!
?>
<?php
// Type Hinting and Return Types
class Calculator {
    public function add(int $a, int $b): int {
        return $a + $b;
    }
}

$calc = new Calculator();
echo $calc->add(5, 10); // Output: 15
?>
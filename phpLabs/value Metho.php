<?php
// Define a class with a method that returns a value
class ValueMethod {
    public function getValue() {
        return "Hello, World!";
    }
}

// Create an instance of the class
$valueMethod = new ValueMethod();

// Call the method and store the returned value
$value = $valueMethod->getValue();

// Export the value (e.g., display it)
echo $value;
?>
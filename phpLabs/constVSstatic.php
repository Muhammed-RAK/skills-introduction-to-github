<?php

/*

Constants and Static Variables in PHP

:::::Explanation:::::

Constants (const):

Constants are defined using the const keyword.
Constants are case-sensitive and are usually written in uppercase letters.
Constants cannot be changed once they are defined.
Constants are accessed using the self::CONSTANT_NAME syntax within the class.
Constants do not require an instance of the class to be accessed.

Static Properties (static):

Static properties are defined using the static keyword.
Static properties can be changed after they are defined.
Static properties are accessed using the self::$propertyName syntax within the class.
Static properties do not require an instance of the class to be accessed, but they can be accessed through an instance as well.
Static properties retain their value across all instances of the class.
Key Differences
Immutability: Constants are immutable (cannot be changed), while static properties can be modified.
Syntax: Constants use const and are accessed with self::CONSTANT_NAME, while static properties use static and are accessed with self::$propertyName.
Instance Requirement: Neither constants nor static properties require an instance of the class to be accessed, but static properties can be modified and retain their value across instances.


*/

class Example {
    // Constant variable
    const CONSTANT_VAR = 'I am a constant variable';

    // Static variable
    public static $staticVar = 'I am a static variable';

    // Method to demonstrate constant
    public function showConstant() {
        echo self::CONSTANT_VAR . "\n";
    }

    // Method to demonstrate static variable
    public function showStatic() {
        echo self::$staticVar . "\n";
    }

    // Method to change static variable
    public function changeStatic($newValue) {
        self::$staticVar = $newValue;
    }
}

// Create an instance of the Example class
$example = new Example();

// Show constant variable
$example->showConstant(); // Output: I am a constant variable

// Show static variable
$example->showStatic(); // Output: I am a static variable

// Change static variable
$example->changeStatic('I am a changed static variable');

// Show static variable again to see the change
$example->showStatic(); // Output: I am a changed static variable

// Attempt to change constant variable (will cause an error)
// Example::CONSTANT_VAR = 'New value'; // Uncommenting this line will cause a fatal error
?>
<?php
// Example 1: Basic PHP Syntax
echo "Hello, World!";

// Example 2: Variables and Data Types
$integerVar = 10;
$stringVar = "This is a string";
$floatVar = 10.5;
$booleanVar = true;

echo "<br>Integer: $integerVar";
echo "<br>String: $stringVar";
echo "<br>Float: $floatVar";
echo "<br>Boolean: $booleanVar";

// Example 3: Arrays
$arrayVar = array("Apple", "Banana", "Cherry");
echo "<br>Array: " . implode(", ", $arrayVar);

// Example 4: Associative Arrays
$assocArray = array("first" => "John", "last" => "Doe");
echo "<br>First Name: " . $assocArray["first"];
echo "<br>Last Name: " . $assocArray["last"];

// Example 5: Conditional Statements
$age = 20;
if ($age >= 18) {
    echo "<br>You are an adult.";
} else {
    echo "<br>You are a minor.";
}

// Example 6: Loops
for ($i = 0; $i < 5; $i++) {
    echo "<br>Loop iteration: $i";
}

// Example 7: Functions
function greet($name) {
    return "Hello, $name!";
}
echo "<br>" . greet("Alice");

// Example 8: Superglobals
echo "<br>Server Name: " . $_SERVER['SERVER_NAME'];
?>
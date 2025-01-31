<?php
// Magic Methods
class Magic {
    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name];
    }

    public function __toString() {
        return "This is a Magic object.";
    }
}

$magic = new Magic();
$magic->name = "PHP"; // Calls __set
echo $magic->name; // Calls __get, Output: PHP
echo $magic; // Calls __toString, Output: This is a Magic object.
?>
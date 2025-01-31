<?php
// Properties and Methods
class Person {
    public $name;
    private $age;

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Person();
$person->name = "John";
$person->setAge(30);
echo $person->getAge(); // Output: 30
?>
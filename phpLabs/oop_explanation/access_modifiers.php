<?php
// Access Modifiers
class Example {
    public $publicVar = "Public";
    private $privateVar = "Private";
    protected $protectedVar = "Protected";

    public function showPrivate() {
        return $this->privateVar;
    }
}

$example = new Example();
echo $example->publicVar; // Works
// echo $example->privateVar; // Error: Cannot access private property
echo $example->showPrivate(); // Output: Private
?>
<?php
// Autoloading Classes
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new MyClass(); // Automatically includes MyClass.php
?>
<?php
// Magic functions in PHP are special methods that are automatically called in certain situations. 
//  They are prefixed with double underscores (__). Here are some of the most commonly used magic functions:

// __construct(): Called when an object is created.
// __destruct(): Called when an object is destroyed.
// __call(): Called when invoking inaccessible methods in an object context.
// __callStatic(): Called when invoking inaccessible methods in a static context.
// __get(): Called when reading data from inaccessible properties.
// __set(): Called when writing data to inaccessible properties.
// __isset(): Called when isset() or empty() is used on inaccessible properties.
// __unset(): Called when unset() is used on inaccessible properties.
// __sleep(): Called when serialize() is used.
// __wakeup(): Called when unserialize() is used.
// __toString(): Called when an object is treated as a string.
// __invoke(): Called when an object is called as a function.
// __set_state(): Called when var_export() is used.
// __clone(): Called when an object is cloned.
// __debugInfo(): Called when var_dump() is used.

class MagicFunctionsExample {
    private $data = array();

    // __construct is called when an object is created
    public function __construct() {
        echo "Constructor called\n";
    }

    // __destruct is called when an object is destroyed
    public function __destruct() {
        echo "Destructor called\n";
    }

    // __call is triggered when invoking inaccessible methods in an object context
    public function __call($name, $arguments) {
        echo "Calling method '$name' with arguments: " . implode(', ', $arguments) . "\n";
    }

    // __callStatic is triggered when invoking inaccessible methods in a static context
    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' with arguments: " . implode(', ', $arguments) . "\n";
    }

    // __get is utilized for reading data from inaccessible properties
    public function __get($name) {
        echo "Getting the value of '$name'\n";
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    // __set is run when writing data to inaccessible properties
    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    // __isset is triggered by calling isset() or empty() on inaccessible properties
    public function __isset($name) {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    // __unset is invoked when unset() is used on inaccessible properties
    public function __unset($name) {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    // __sleep is called when serialize() is called
    public function __sleep() {
        echo "Sleep called\n";
        return array_keys(get_object_vars($this));
    }

    // __wakeup is called when unserialize() is called
    public function __wakeup() {
        echo "Wakeup called\n";
    }

    // __toString is called when an object is treated as a string
    public function __toString() {
        return "MagicFunctionsExample object\n";
    }

    // __invoke is called when a script tries to call an object as a function
    public function __invoke() {
        echo "Object is called as a function\n";
    }

    // __set_state is called for var_export()
    public static function __set_state($an_array) {
        $obj = new self();
        foreach ($an_array as $key => $value) {
            $obj->$key = $value;
        }
        return $obj;
    }

    // __clone is called when an object is cloned
    public function __clone() {
        echo "Object cloned\n";
    }

    // __debugInfo is called by var_dump() when dumping an object to get the properties that should be shown
    public function __debugInfo() {
        return [
            'data' => $this->data,
        ];
    }
}

// Example usage
$obj = new MagicFunctionsExample();
$obj->nonExistentMethod('arg1', 'arg2');
$obj->property = 'value';
echo $obj->property;
isset($obj->property);
unset($obj->property);
serialize($obj);
unserialize(serialize($obj));
echo $obj;
$obj();
var_export($obj);
clone $obj;
var_dump($obj);
?>
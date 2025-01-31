<?php
// Static Properties and Methods
class Math {
    public static $pi = 3.14;

    public static function square($num) {
        return $num * $num;
    }
}

echo Math::$pi; // Output: 3.14
echo Math::square(5); // Output: 25
?>
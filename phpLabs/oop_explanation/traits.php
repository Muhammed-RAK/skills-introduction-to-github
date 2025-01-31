<?php
// Traits
trait Loggable {
    public function log($message) {
        echo "Log: $message\n";
    }
}

class User {
    use Loggable;

    public function createUser() {
        $this->log("User created!");
    }
}

$user = new User();
$user->createUser(); // Output: Log: User created!
?>
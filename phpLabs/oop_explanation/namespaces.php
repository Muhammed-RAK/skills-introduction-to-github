<?php
// Namespaces
namespace App\Models;

class User {
    public function getName() {
        return "John Doe";
    }
}

// Usage
$user = new \App\Models\User();
echo $user->getName(); // Output: John Doe
?>
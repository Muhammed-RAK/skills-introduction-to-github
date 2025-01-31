<?php
// Constructor and Destructor
class Book {
    public $title;

    public function __construct($title) {
        $this->title = $title;
        echo "Book created: $this->title\n";
    }

    public function __destruct() {
        echo "Book destroyed: $this->title\n";
    }
}

$book = new Book("PHP OOP"); // Output: Book created: PHP OOP
// Output (when script ends): Book destroyed: PHP OOP
?>
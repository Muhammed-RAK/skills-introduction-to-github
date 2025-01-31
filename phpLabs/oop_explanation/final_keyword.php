<?php
// Final Keyword
final class FinalClass {
    // Cannot be extended
}

class ParentClass {
    final public function finalMethod() {
        // Cannot be overridden
    }
}
?>
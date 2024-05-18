<?php
// Ape.php
require_once 'Animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2; // Ape has 2 legs
    }

    public function yell() {
        echo "Yell : Auooo" . PHP_EOL;
    }
}
?>

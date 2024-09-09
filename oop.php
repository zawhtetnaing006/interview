<?php

class Animal {
    public function __construct() {
        echo "Animal class constructor called";
    }
}

class Dog extends Animal {
    public function __construct() {
        echo "Dog class constructor called";
    }
}

$dog = new Dog();
?>

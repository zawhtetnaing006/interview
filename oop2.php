<?php

class Animal {
    public function init() {
        $this->stepOne();
        $this->stepTwo();
    }

    public function stepOne() {
        echo "Animal class stepOne done";
    }

    public function stepTwo() {
        echo "Animal class stepTwo done";
    }
}

class Dog extends Animal {

    public function stepOne() {
        echo "Dog class stepOne done";
    }

    public function stepTwo() {
        echo "Dog class stepTwo done";
    }
}

$dog = new Dog();
$dog->init();
?>
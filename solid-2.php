<?php

class Area {
    public function calculate($something) {
        //calculate the area of something and return it
        if($something instanceof Circle) {
            //return circle area
        } elseif ($something instanceof Square) {
            //return square area
        }
    }
}

class Circle {
    public $radius;
}

class Square {
    public $lenght;
}

class Rectangle {
    public $width;
    public $height;
}

/**
 * Problem: the parameter in calculate method can be Circle or Square or Rectangle and may be more in the future. 
 * so, this calcuate method will become very big and difficult to maintain in the future. 
 * How should we update our code in a way so it will be easier to maintain and introduce minimum bugs in the future?
 */
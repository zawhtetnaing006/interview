<?php
class Animal {
    public static $species = 'default specie';
}

$dog = new Animal();
$dog::$species = '4 legs animal';

$cat = new Animal();
echo $cat::$species;
?>


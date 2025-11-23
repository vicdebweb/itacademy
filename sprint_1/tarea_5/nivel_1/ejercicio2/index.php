<?php

require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Rat.php';

$Cat = new Cat();
$Dog = new Dog();
$Rat = new Rat();

$animals = array($Cat, $Dog, $Rat);

foreach ($animals as $animal) {
    $animal->makeSound();
}
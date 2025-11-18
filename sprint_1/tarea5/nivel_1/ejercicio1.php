<?php

//Interface definition
interface Animal {
    public function makeSound();
}

//Classes definitions (Dog, Cat...)
class Cat implements Animal {
    public function makeSound() {
        echo "Meow, ";
    }
}

class Dog implements Animal {
  public function makeSound() {
    echo "Guawww, ";
  }
}

class Rat implements Animal {
    public function makeSound() {
        echo "Ffffff";
    }
}

$Cat = new Cat();
$Dog = new Dog();
$Rat = new Rat();
$animals = array($Cat, $Dog, $Rat);

foreach ($animals as $animal) {
    $animal->makeSound();
}
?>
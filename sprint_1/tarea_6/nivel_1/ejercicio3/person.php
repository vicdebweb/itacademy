<?php

class Person {
    public $name;

    public function __toString() {
        return "Person name: " . $this->name;
    }
}
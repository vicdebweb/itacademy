<?php

require_once 'Shape.php';

// Triángulo
class Triangle extends Shape {
    public function area() {
        return ($this->width * $this->height) / 2;
    }
}
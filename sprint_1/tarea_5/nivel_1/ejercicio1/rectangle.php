<?php

require_once 'Shape.php';

// Rectángulo
class Rectangle extends Shape {
    public function area() {
        return $this->width * $this->height;
    }
}
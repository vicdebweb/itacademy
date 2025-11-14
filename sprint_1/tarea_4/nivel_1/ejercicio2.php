<?php

//Forma básica para ancho / alto
class Shape {
    public $width;
    public $height;

    // Aquí recibe los parámetros (ancho / alto)
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

// Cálculo para el área de triángulo heredado de 'shape'
class Triangle extends Shape {
    public function area() {
        return ($this->width * $this->height) / 2;
    }
}

//Cálculo para área de rectángulo heredado de 'shape'
class Rectangle extends Shape {
    public function area() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->area() . "\n";

$rectangle = new Rectangle(10, 5);
echo "Rectangle area: " . $rectangle->area();

?>
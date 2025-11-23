<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangle = new Triangle(10, 5);
echo "Área del triángulo: " . $triangle->area() . "\n";

$rectangle = new Rectangle(10, 5);
echo "Área del rectángulo: " . $rectangle->area();
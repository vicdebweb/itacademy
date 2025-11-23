<?php

// Clase común Shape
abstract class Shape {
    protected $width;
    protected $height;

    // Constructor para parámetros (ancho/alto)
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Método para que las clases usen area
    abstract public function area();
}
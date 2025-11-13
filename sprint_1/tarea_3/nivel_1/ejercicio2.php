<?php

$numbers = [10, 20, 30, 40, 50, 60];

// Muestro el tamaño inicial:
echo "Tamaño inicial: " . count($numbers) . "\n";

// Elimino un elemento del indice 2 (30):
unset($numbers[2]);

// Reorganizo los índices:
$numbers = array_values($numbers);

// Muestro tamaño final:
echo "Tamaño final: " . count($numbers) . "\n";
echo "Contenido:\n";

foreach ($numbers as $index => $value) {
    echo "Índice $index → $value\n";
}

?>

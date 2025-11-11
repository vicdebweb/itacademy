// Victor Alcazar


Ejercicio 1:
<?php

$integer = 10;
$double = 3.14;
$text = "Hola mundo";
$boolean = true;


echo "Entero: $integer, ";
echo "Decimal: $double, ";
echo "Texto: $text, ";
echo "Booleano: " . ($boolean ? "true" : "false") . "\n";


define ("MI_NOMBRE", "VICTOR");
echo "<h1>" . MI_NOMBRE . "</h1>";
?>

//Ejercicio 2:
<?php
define("Hi", " Hello World! ");
echo Hi;

echo strtoupper(Hi);
echo strlen(Hi);
echo strrev(Hi);

$php = " Este es el curso de PHP";

echo Hi, $php;
?>

//Ejercicio 3:
<?php

$x = 2;
$y = 4;
$n = 2.22;
$m = 4.44;

echo "X = " . $x . ", Y = " . $y . "\n";
echo 'Suma: ' . $x + $y . "\n";
echo 'Resta: ' . $x - $y . "\n";
echo 'Producto: ' . $x * $y . "\n";
echo 'Módulo: ' . $x % $y . "\n";
echo 'Doble de X: ' . $x * 2 . "\n";
echo 'Doble de Y: ' . $y * 2 . "\n" . "\n";


echo "N = " . $n . ", M = " . $m . "\n";
echo 'Suma: ' . $n + $m . "\n";
echo 'Resta: ' . $n - $m . "\n";
echo 'Producto: ' . $n * $m . "\n";
echo 'Módulo: ' . $n % $m . "\n";
echo 'Doble de N: ' . $n * 2 . "\n";
echo 'Doble de M: ' . $m * 2 . "\n" . "\n";

echo 'Suma de todas las variables: ' . $x + $y + $n + $m . "\n";
echo 'Producto de todas las variables: ' . $x * $y * $n * $m . "\n";
?>
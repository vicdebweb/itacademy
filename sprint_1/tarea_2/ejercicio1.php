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
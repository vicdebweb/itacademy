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

//Ejercicio 3, parte A:
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

//Ejercicio 3, parte B:
<?php

function Calcular ($x, $y, $operacion){
    if($operacion == "suma"){
        echo $x + $y;
    }
    elseif ($operacion == "resta"){
        echo $x - $y;
    }
    elseif ($operacion == "multiplicacion"){
        echo $x * $y;
    }
    elseif ($operacion == "division"){
        echo $x / $y;
    }
}

Calcular (2, 8, "suma") . "\n";

?>

/Ejercicio 4:
<?php
$n = 1; // El numero por el que empieza.

while ($n <=30){ //Aquí cuenta hasta que la secuencia sea igual o menor que 30.
	echo $n . "\n";
	$n += 4; //Aquí cuenta de 4 en 4 números.
}
?>


/Ejercicio 5:
<?php
$valor = 50;

$outputValue = match (true){
    $valor <33  => "Reprobarás",
    $valor <44  => "Tercera División",
    $valor <59  => "Segunda División",
    $valor <100 => "Primera División",
}
?>

/Ejercicio 6:
<?php
$bite = rand(0, 1);

if ($bite == 0) {
    echo "Resultado A";
} else {
    echo "Resultado B";
}
?>
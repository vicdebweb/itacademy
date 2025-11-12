<?php
$valor = 50;

$outputValue = match (true){
    $valor <33  => "Reprobarás",
    $valor <44  => "Tercera División",
    $valor <59  => "Segunda División",
    $valor <100 => "Primera División",
}
?>
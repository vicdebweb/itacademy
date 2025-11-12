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
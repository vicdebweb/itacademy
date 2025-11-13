<?php

function allContainChar($words, $char) {
    foreach ($words as $word) {
        // si no encuentra el caracter (false):
        if (strpos(strtolower($word), strtolower($char)) === false) {
            return false;
        }
    }

    // Si lo encuentra (true):
    return true;
}

$lista = ["hola", "Php", "Html"];

var_dump(allContainChar($lista, "h")); // Devolvería 'true'.
var_dump(allContainChar($lista, "l")); // Devolvería 'false'.

?>
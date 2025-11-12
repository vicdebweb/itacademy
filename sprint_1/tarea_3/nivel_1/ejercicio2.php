<?php

$colours = array("Blue", "Green", "Purple", "Brown", "Orange", "Red");

//Muestra el tamaño del Array
echo count($colours);

//Elimina (sólo) el segundo elemento del Array
array_splice($colours, 2, 1);

//Muestra por última vez el tamaño y contenido
var_dump ($colours);



?>
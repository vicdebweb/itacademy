<?php

function isBitten() {
    $bite = rand(0, 1);

    if ($bite == 0) {
        return true;
    } else {
        return false;
    }
}

if (isBitten()) {
    echo "Charlie te ha mordido.";
} else {
    echo "Charlie ha fallado.";
}

?>
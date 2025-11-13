<?php

function verify($note)
{
    return match (true) {
        $note < 33  => "Reprobarás",
        $note < 45  => "Tercera División",
        $note < 60  => "Segunda División",
        $note >= 60 => "Primera División",
    };
}

echo verify(50);

?>
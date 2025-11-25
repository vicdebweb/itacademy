<?php

class SpeedChecker
{
    public function check(int $speed): string{
        if ($speed < 30) {
            return "Muy lento";
        }

        if ($speed >= 30 && $speed <= 60) {
            return "Velocidad adecuada";
        }

        if ($speed >= 61 && $speed <= 80) {
            return "Exceso leve";
        }

        if ($speed >= 81 && $speed <= 100) {
            return "Exceso moderado";
        }

        return "Exceso grave";
    }
}
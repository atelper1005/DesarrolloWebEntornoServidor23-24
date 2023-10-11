<?php
    /*

        Ejemplo 8 -- Calificación de una nota de 0 a 10 con switch


    */

    switch($a = 1) {

        case ($a < 5):
            echo "Insuficiente";
            break;

        case ($a < 6):
            echo "Suficiente";
            break;

        case ($a < 7):
            echo "Bien";
            break;

        case ($a < 9):
            echo "Notable";
            break;

        case ($a <= 10):
            echo "Sobresaliente";
            break;

        default:
            echo "Nota no válida";
            break;
    }

?>
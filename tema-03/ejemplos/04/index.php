<?php
    /*

        Ejemplo 4 -- Calificación de una nota de 0 a 10

    */

    $a = 1;

    if ($a <  5) {
        
        echo "Insuficiente";

    } else if ($a < 6) {

        echo "Suficiente";

    } else if ($a < 7) {

        echo "Bien";

    } else if ($a < 9) {

        echo "Notable";

    } else if ($a <= 10) {

        echo "Sobresaliente";

    } else {

        echo "Nota no válida";

    }
    
?>
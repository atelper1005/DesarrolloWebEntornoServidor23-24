<?php

    /*  

        unset

    */

    $numeros = array(4, 5, 7, 10, 60, 90, 100);

    unset($numeros[3]);

    $numeros[3] = 33;

    foreach ($numeros as $num) {

        echo $num;
        echo "<br>";
    }

?>
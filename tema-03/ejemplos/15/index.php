<?php

    /*  

        for y foreach

    */

    $numeros = array(4, 5, 7, 10, 60, 90);

    //$numeros = array(0 => 4, 5, 7, 10, 60, 90);

    for($i = 0; $i < count($numeros); $i++) {

        echo $i;
        echo "=>";
        echo $numeros[$i];
        echo "<br>";
    }

    echo "<br>";
    //-----------------------------------------

    foreach ($numeros as $num) {

        echo $num;
        echo "<br>";
    }

?>
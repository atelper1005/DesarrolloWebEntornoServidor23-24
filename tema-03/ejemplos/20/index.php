<?php

    /* 
    
        Funciones PHP

        Argumentos por valor y referencia
    
    */

    function sumar($var1, $var2, &$resultado) {
        $resultado = $var1 + $var2;
    }

    $r = 0;

    $num1 = 15;
    $num2 = 30;

    sumar($num1, $num2, $r);

    echo "Resultado $num1 + $num2 = ".$r;

?>
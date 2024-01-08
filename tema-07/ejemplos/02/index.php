<?php

/*

    Ejemplo 7.2
    inicio de sesión // variables

*/

# inicio sesión
session_start();

echo "sesion iniciada";
echo "<br>";
echo "SID: " . session_id();
echo "<br>";
echo "NAME: " . session_name();

?>
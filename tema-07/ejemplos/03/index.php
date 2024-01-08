<?php

/*

    Ejemplo 7.3
    Personalizar sesión

*/

# Personalizar sesión
session_id("10106969");
session_name("GESBANK_ini");

# inicio sesión
session_start();

echo "sesion iniciada";
echo "<br>";
echo "SID: " . session_id();
echo "<br>";
echo "NAME: " . session_name();

?>
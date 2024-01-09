<?php

    /*
    
    Mostrar.php

    Ejemplo mostrar cookies
    
    */

    //Acceder a la cookie nombre
    if (isset($_COOKIE['nombre'])) {
        echo $_COOKIE['nombre'];
        echo '<br>';
    } else {
        echo 'Mostrar datos de la cookie nombre';
    }

    //Acceder a la cookie apellidos
    if (isset($_COOKIE['apellidos'])) {
        echo $_COOKIE['apellidos'];
        echo '<br>';
    } else {
        echo 'Mostrar datos de la cookie apellidos';
    }

?>
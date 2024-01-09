<?php

    /**
     * Eliminar.php
     * 
     * Ejemplo eliminar cookie
     */

     //Eliminar cookie nombre
     setcookie('nombre', '', time() -3600);

     //Eliminar cookie apellidos
     setcookie('apellidos', '', time() -3600);

     echo 'Cookies eliminadas correctamente';

?>
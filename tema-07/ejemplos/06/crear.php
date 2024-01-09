<?php

    /*
    
    Crear.php

    Ejemplo creación cookies
    
    */

    //Nombre cookie
    $nombre_cookie = 'datos_personales';

    // //Almacenar nombre y expira a los 60 min
    // $nombre = "Juan";
    // $expiracion = time() + 60 * 30;

    //Crear cookie nombre
    setcookie('nombre', 'Antonio Jesús', time() + 60 * 30);

    //Crear cookie apellido
    setcookie('apellidos', 'Téllez Perdigones', time() + 60 * 30);

   
     echo 'Cookies creadas correctamente';
    
?>
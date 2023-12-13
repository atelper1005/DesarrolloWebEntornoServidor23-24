<?php

   /*
        create.php

        Controlador que permite añadir un nuevo libro a la tabla libros de geslibros

   */

   # Cargamos config
   include('config/config.php');

   # Cargamos librería
   

   #Cargamos las clases
   include 'class/class.conexion.php';
   include 'class/class.libro.php';
   include 'class/class.libros.php';

   #Cargamos el modelo
   include 'models/model.create.php';

   #Cargamos la vista
   header('Location:index.php')

?>
<?php

    /*
    
        Modelo: model.nuevo.php

        Descripción: Genera un array de objetos de articulos
    
    */

    #Cargamos los arrays a partir de los metodos estaticos de la clase ArrayArticulos
    $categorias = ArrayArticulos::getCategorias();
    $marcas = ArrayArticulos::getMarcas();

    #Creamos un objeto de la clase ArrayArticulos
    $articulos = new ArrayArticulos();

    #Cargo los datos
    $articulos->getDatos();
?>
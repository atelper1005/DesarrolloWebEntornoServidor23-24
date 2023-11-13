<?php
    /*
    
        Modelo: model.create.php
        Descripción: añade un nuevo elemento a la tabla

        Método POST:
                    -id del articulo que quiero añadir
                    -descripcion
                    -modelo
                    -categoria
                    -unidades
                    -precio
    
    */

    #Cargamos las categorías y creamos un Array de Artículos
    $categorias = ArrayArticulos::getCategorias();
    $marcas = ArrayArticulos::getMarcas();

    #Creamos un objeto de la clase ArrayArticulos
    $articulos = new ArrayArticulos();

    #Cargo los datos
    $articulos->getDatos();

    #Obtengo el indice del  artículo que deseo editar
    $indice = $_GET['indice'];


    #Pillamos el índice del articulo que queremos editar
    $articulo = $articulos->read($indice);

?>
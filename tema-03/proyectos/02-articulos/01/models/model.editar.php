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

    $articulos = generar_tabla_articulos();
    $categorias = generar_tabla_categorias();

    //Extraer indice
    $indice = $_GET['id'];

    //Cargamos el array de ese articulo
    $indiceArticulo = buscar_en_tabla($articulos,'id',$indice);
    if ($indiceArticulo !==false){
        // Obtengo el array del articulo
        $articulo = $articulos[$indiceArticulo];
    } else{
        echo 'ERROR: Artículo no encontrado';
        exit();
    }

    //Obtengo el array correspondiente
    //$articulo = $articulos[$indice];

?>
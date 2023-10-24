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

    #Genero la tabla
    $categorias = generar_tabla_categorias();
    $articulos = generar_tabla_articulos();

    #extreaemos en variables los valores del formulario

    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $modelo = $_POST['modelo'];
    $categorias = $_POST['categoria'];
    $unidades = $_POST['unidades'];
    $precio = $_POST['precio'];

    #creo un array asociativo con los detalles del nuevo elemento

    $articulo = [
        'id' => $id,
        'descripcion'=> $descripcion,
        'modelo'=> $modelo,
        'categoria'=> $categorias,
        'unidades'=> $unidades,
        'precio' => $precio
    ];

    #Añado un nuevo elemento a la tabla

    array_push($articulos, $articulo);
    

?>
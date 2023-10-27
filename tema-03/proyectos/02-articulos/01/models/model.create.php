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

    #Creamos la tabla
    $articulos = generar_tabla_articulos();

    #Cargamos las categorias
    $categorias = generar_tabla_categorias();
    
    #Generamos la id automaticamente
    $id = ultimoId($articulos)+1;

    #extreaemos en variables los valores del formulario
    $descripcion = $_POST['descripcion'];
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $unidades = $_POST['unidades'];
    $precio = $_POST['precio'];

    #creo un array asociativo con los detalles del nuevo elemento
    $articulo = [
        'id' => $id,
        'descripcion'=> $descripcion,
        'modelo'=> $modelo,
        'categoria'=> $categoria,
        'unidades'=> $unidades,
        'precio' => $precio
    ];

    #Metemos los articulos en la matriz
    $articulos = nuevo($articulos, $articulo);

?>
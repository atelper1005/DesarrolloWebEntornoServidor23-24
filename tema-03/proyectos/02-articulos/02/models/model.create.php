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

    #Cargamos las marcas
    $marcas = generar_tabla_marcas();
    
    #Generamos la id automaticamente
    $id = ultimoId($articulos)+1;

    #extreaemos en variables los valores del formulario
    $descripcion = $_POST['descripcion'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $unidades = $_POST['unidades'];
    $precio = $_POST['precio'];

    #creo un array asociativo con los detalles del nuevo elemento
    $nuevo_articulo = [
        'id' => $id,
        'descripcion'=> $descripcion,
        'modelo'=> $modelo,
        'marca' => $marcas,
        'categoria'=> $_POST('categorias'),
        'unidades'=> $unidades,
        'precio' => $precio
    ];

    #Metemos los articulos en la matriz
    $articulos = nuevo($articulos, $nuevo_articulo);

?>
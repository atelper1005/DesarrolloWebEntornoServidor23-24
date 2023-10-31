<?php
    /*
        Modelo: modelUpdate.php
        Descripción: actualiza los detalle de un articulo

        Método POST 
            - descripcion
            - modelo
            - categorias (valor númerico)
            - unidades
            - precio
        
        Método GET
            - id
    */

    // Cargamos las tablas
    $articulos = generar_tabla_articulos();
    $categorias = generar_tabla_categorias();    

    // Obtendremos el id del artículo a actualizar a través de una url dinámica (método GET)
    $indice = $_GET['indice'];

    // Con los datos obtenidos del metodo POST, crearemos un array que contendrá los valores actualizados
    $edit_articulo = [

        'id' => $_POST['id'],
        'descripcion'=>$_POST['descripcion'],
        'modelo'=>$_POST['modelo'],
        'categorias'=>$_POST['categorias'],
        'unidades'=> $_POST['unidades'],
        'precio'=> $_POST['precio']

    ];

    // Añadimos el articulo actualizado a la tabla
    $articulos[$indice] = $edit_articulo;
?>
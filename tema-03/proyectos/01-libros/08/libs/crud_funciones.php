<?php

/*

    funcion: buscar_en_tabla()
    descripcion: busca un valor en una determinada columna de una tabla
    parámetros:
                - tabla
                - nombre de la columna - búsqueda
                - valor - que quiero buscar
    salida: 
                -indice del array donde se encuentra el valor
                - false - en caso de no lo encuentre

*/

function buscar_en_tabla($tabla = [], $columna, $valor) {

    $columna_valores = array_column($tabla, $columna);
    return array_search($valor, $columna_valores, false);
}

/*
    
        funcion: generar_tabla()
        descripcion: genera la tabla de datos con la que vamos a trabajar
        parámetros:
                    
        salida: 
                    - tabla de datos
    
    */

function generar_tabla() {

    $tabla = [
        [
            'id' => 1,
            'titulo' => 'Los Señores del Tiempo',
            'autor' => 'García Sénz de Urturi',
            'genero' => 'Novela',
            'precio' => 19.5
        ],

        [
            'id' => 2,
            'titulo' => 'El Rey recibe',
            'autor' => 'Eduardo Mendoza',
            'genero' => 'Novela',
            'precio' => 20.5
        ],

        [
            'id' => 3,
            'titulo' => 'Diario de una mujer',
            'autor' => 'Eduardo Mendoza',
            'genero' => 'Juvenil',
            'precio' => 12.95
        ],

        [
            'id' => 4,
            'titulo' => 'El Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'genero' => 'Novela',
            'precio' => 15.95
        ],

        [
            'id' => 5,
            'titulo' => 'Inferno',
            'autor' => 'Dan Brown',
            'genero' => 'Suspense',
            'precio' => 17.75
        ]
    ];

    return $tabla;
}



/*

    funcion:eliminar()
    descripción: elimina un elemento de la tabla
    parámetros: 
                - tabla 
                - id del elemento que deseo eliminar
            
        salida: 
                - tabla actualizada

*/

// function eliminar($tabla = [], $id) {
//     //devuelve array con valores de la columna id
//     $lista_id = array_column($tabla, 'id');

//     //busco id del libro que deseo eliminar en dicha columna
//     $elemento = array_search($id, $lista_id, false);

//     //eliminar elemento de la tabla
//     unset($tabla[$elemento]);

//     return $tabla;
// }

?>
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
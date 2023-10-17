<?php

    /*
    
        funcion:eliminar()
        descripción: elimina un elemento de la tabla
        parámetros: 
                    - tabla 
                    - id del elemento que deseo eliminar
                
            salida: 
                    - tabla actualizada
    
    */

    function eliminar($tabla = [], $id) {
        foreach ($tabla as $idAsociado => $elemento) {
            if($elemento['id'] == $id) {
                unset($tabla[$idAsociado]);
            }
        }
    }

?>
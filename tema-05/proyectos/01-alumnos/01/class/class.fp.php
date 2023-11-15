<?php

/*

    class.fp.php

    Métodos necesarios para la gestion de la BBDD fp
    En este caso solo los metodos pertenecientes a la tabla Alumnos

*/

class Fp extends Conexion
{
    /*
    
    getAlumnos()

    Devuelve un objeto conjunto resultados (mysqli_result)
    con los detalles de todos los alumnos
    
    */
    public function getAlumnos()
    {
        $sql = "SELECT 
            alumnos.id,
            CONCAT_WS(', ', alumnos.apellidos, alumnos.nombre) alumno,
            alumnos.email,
            alumnos.telefono,
            alumnos.poblacion,
            TIMESTAMPDIFF(YEAR,
                alumnos.fechaNac,
                NOW()) EDAD,
            cursos.nombreCorto AS curso
        FROM
            alumnos
                INNER JOIN
            cursos ON alumnos.id_curso = cursos.id
        ORDER BY id";

        $result = $this->db->query($sql);

        return $result;
    }
}

?>
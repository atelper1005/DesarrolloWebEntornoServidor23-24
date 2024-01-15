<?php

/**
 * 
 *  alumnoModel.php
 * 
 * Modelo del controlador alumnos
 * Definimos los métodos de acceso a la base de datos
 *  - Insert
 *  - Update
 *  - Select
 *  - Delete
 *  - etc...
 */
class alumnoModel extends Model
{
    /**
     * Extrae los detalles de los alumnos
     */
    public function get()
    {
        try {
            // Creamos la consulta
            $sql = "SELECT 
    alumnos.id,
    CONCAT_WS(', ', alumnos.apellidos, alumnos.nombre) AS nombre,
    alumnos.email,
    alumnos.telefono,
    alumnos.poblacion,
    alumnos.dni,
    TIMESTAMPDIFF(YEAR,
        alumnos.fechaNac,
        NOW()) AS edad,
    cursos.nombreCorto AS curso
FROM
    fp.alumnos
        INNER JOIN
    cursos ON alumnos.id_curso = cursos.id
ORDER BY id";

            // Conectamos con la base de datos
            // $this->db es un objeto de la clase database
            // Ejecutamos el  método connecto de esa clase
            $conexion = $this->db->connect();

            // Preparamos la consulta
            $pdostmt = $conexion->prepare($sql);

            // Establecemos el tipo de fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devolvemos el objeto de tipo PDOStatement
            return $pdostmt;
        } catch (PDOException $e) {
            include 'template/partials/errorDB.php';
            exit();
        }
    }
    /**
     * Método getCursos()
     * Obtenemos todos los cursos
     */
    public function getCursos()
    {
        try {
            // Creamos la consulta
            $sql = "SELECT
                id,
                nombreCorto curso
                FROM fp.cursos
                ORDER BY nombreCorto ";

            // Conectamos con la base de datos
            // $this->db es un objeto de la clase database
            // Ejecutamos el  método connecto de esa clase
            $conexion = $this->db->connect();

            // Preparamos la consulta
            $pdostmt = $conexion->prepare($sql);

            // Establecemos el tipo de fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devolvemos el objeto de tipo PDOStatement
            return $pdostmt;

        } catch (PDOException $e) {
            include 'template/partials/errorDB.php';
            exit();
        }
    }

    /**
     * Método Create(classAlumno $alumno)
     * Insertamos el nuevo alumno a la base de datos
     */
    public function create(classAlumno $alumno)
    {
        try {
            // Creamos la consulta a ejecutar
            $sql = "INSERT INTO fp.alumnos (nombre, 
            apellidos, 
            email, 
            telefono, 
            direccion, 
            poblacion, 
            provincia, 
            nacionalidad, 
            dni, 
            fechaNac, 
            id_curso) VALUES (
                :nombre, 
                :apellidos, 
                :email, 
                :telefono, 
                :direccion, 
                :poblacion, 
                :provincia, 
                :nacionalidad, 
                :dni, 
                :fechaNac, 
                :id_curso)";

            // Preparamos la consulta
            $conexion = $this->db->connect();

            $pdostmt = $conexion->prepare($sql);

            // Vinculamos las variables
            $pdostmt->bindParam(':nombre', $alumno->nombre,PDO::PARAM_STR,30);
            $pdostmt->bindParam(':apellidos', $alumno->apellidos,PDO::PARAM_STR,50);
            $pdostmt->bindParam(':email', $alumno->email,PDO::PARAM_STR,50);
            $pdostmt->bindParam(':telefono', $alumno->telefono,PDO::PARAM_INT);
            $pdostmt->bindParam(':direccion', $alumno->direccion,PDO::PARAM_STR,60);
            $pdostmt->bindParam(':poblacion', $alumno->poblacion,PDO::PARAM_STR,30);
            $pdostmt->bindParam(':provincia', $alumno->provincia,PDO::PARAM_STR,20);
            $pdostmt->bindParam(':nacionalidad', $alumno->nacionalidad);
            $pdostmt->bindParam(':dni', $alumno->dni);
            $pdostmt->bindParam(':fechaNac', $alumno->fechaNac);
            $pdostmt->bindParam(':id_curso', $alumno->id_curso,PDO::PARAM_INT);
            
            // Ejecutamos la sentencia
            $pdostmt->execute();
        } catch (PDOException $e) {
            include 'template/partials/errorDB.php';
            exit();
        }
    }

    /**
     * Método read($id)
     * Devuelve el registro de una base de datos a través de un id
     */
    public function read(int $id){
        try {
            $sql="SELECT * FROM fp.alumnos WHERE alumnos.id = :id";

            // Creamos la conexión a la base de datos, y preparamos la consulta
            $conexion = $this->db->connect();
            $pdostmt = $conexion->prepare($sql);

            // vinculamos variables
            $pdostmt->bindParam(':id',$id,PDO::PARAM_INT);

            // Escogemos el tipo de fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devolvemos un objeto de la clase PDOStatement
            return $pdostmt->fetch();
        } catch (PDOException $e) {
            include 'template/partials/errorDB.php';
            exit();
        }
    }

    /**
     * Método update($id, $alumno)
     * Actualiza un registro de la base de datos según su id
     */
    public function update(int $id,classAlumno $alumno){
        try {
            // Creamos la consulta a ejecutar
            $sql = "UPDATE fp.alumnos SET nombre = :nombre, 
            apellidos = :apellidos, 
            email = :email, 
            telefono = :telefono, 
            direccion = :direccion, 
            poblacion = :poblacion, 
            provincia = :provincia, 
            nacionalidad = :nacionalidad, 
            dni = :dni, 
            fechaNac = :fechaNac, 
            id_curso = :id_curso 
            WHERE alumnos.id = :id";

            // Preparamos la consulta
            $conexion = $this->db->connect();

            $pdostmt = $conexion->prepare($sql);

            // Vinculamos las variables
            $pdostmt->bindParam(':id',$id,PDO::PARAM_INT);
            $pdostmt->bindParam(':nombre', $alumno->nombre,PDO::PARAM_STR,30);
            $pdostmt->bindParam(':apellidos', $alumno->apellidos,PDO::PARAM_STR,50);
            $pdostmt->bindParam(':email', $alumno->email,PDO::PARAM_STR,50);
            $pdostmt->bindParam(':telefono', $alumno->telefono,PDO::PARAM_INT);
            $pdostmt->bindParam(':direccion', $alumno->direccion,PDO::PARAM_STR,60);
            $pdostmt->bindParam(':poblacion', $alumno->poblacion,PDO::PARAM_STR,30);
            $pdostmt->bindParam(':provincia', $alumno->provincia,PDO::PARAM_STR,20);
            $pdostmt->bindParam(':nacionalidad', $alumno->nacionalidad);
            $pdostmt->bindParam(':dni', $alumno->dni);
            $pdostmt->bindParam(':fechaNac', $alumno->fechaNac);
            $pdostmt->bindParam(':id_curso', $alumno->id_curso,PDO::PARAM_INT);
            
            // Ejecutamos la sentencia
            $pdostmt->execute();
        } catch (PDOException $e) {
            include 'template/partials/errorDB.php';
            exit();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM alumnos WHERE id = :id limit 1";
            $conexion = $this->db->connect();
            $pdostmt = $conexion->prepare($sql);
            $pdostmt -> bindParam(":id", $id, PDO::PARAM_INT);
            $pdostmt -> execute();
        } catch(PD0Exception $e) {
            include_once('template/partials/errorDB.php');
            exit();
        }
    }

    # Validacion email unico
    public function validateUniqueEmail($email){
        try{
            $sql = "
                SELECT * FROM alumnos
                WHERE email = :email
            ";

            #Conectar a la base de datos
            $conexion = $this->db->connect();
            $pdost = $conexion->prepare($sql);
            $pdost->bindParam(":email", $email, PDO::PARAM_STR);
            $pdost->execute();

            if($pdost->rowCount() != 0) {
                return false;
            }

            return true;

        } catch (PDOException $e) {
            include_once('template/partials/errorDB.php');
            exit();
        }
    }

    # Validacion email unico
    public function validateUniqueDNI($dni){
        try{
            $sql = "
                SELECT * FROM alumnos
                WHERE dni = :dni
            ";

            #Conectar a la base de datos
            $conexion = $this->db->connect();
            $pdost = $conexion->prepare($sql);
            $pdost->bindParam(":dni", $dni, PDO::PARAM_STR);
            $pdost->execute();

            if($pdost->rowCount() != 0) {
                return false;
            }

            return true;

        } catch (PDOException $e) {
            include_once('template/partials/errorDB.php');
            exit();
        }
    }

    public function validateCurso($id_curso){
        try{
            $sql = "
                SELECT * FROM cursos
                WHERE id = :id_curso
            ";

            #Conectar a la base de datos
            $conexion = $this->db->connect();
            $pdost = $conexion->prepare($sql);
            $pdost->bindParam(":id", $id_curso, PDO::PARAM_STR);
            $pdost->execute();

            if($pdost->rowCount() == 1) {
                return true;
            }

            return false;

        } catch (PDOException $e) {
            include_once('template/partials/errorDB.php');
            exit();
        }
    }
}
?>
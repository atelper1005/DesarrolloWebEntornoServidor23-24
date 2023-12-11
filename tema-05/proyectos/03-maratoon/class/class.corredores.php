<?php

/*
    Clase Corredores

    Métodos específicos para BBDD maratoon con las tablas
    - Corredores
*/

class Corredores extends Conexion
{

    public function getCorredores()
    {

        try {
            // Creamos la sentencia
            $sql = "SELECT 
            corredores.id,
            CONCAT_WS(', ',corredores.apellidos, corredores.nombre) as nombre,
            corredores.ciudad,
            corredores.email,
            TIMESTAMPDIFF(YEAR,
                corredores.fechaNacimiento,
                NOW()) AS edad,
            categorias.nombrecorto AS categoria,
            clubs.nombreCorto AS club
        FROM
            maratoon.corredores
                INNER JOIN
            maratoon.categorias ON categorias.id = corredores.id_categoria
                INNER JOIN
            maratoon.clubs ON clubs.id = corredores.id_club
        ORDER BY id";

            // Prepare
            $pdostmt = $this->pdo->prepare($sql);

            // Establecemos el fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devuelvo objeto clase PDOStatement
            return $pdostmt;

        } catch (PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }

    public function getCategorias()
    {

        try {

            $sql = "SELECT 
                categorias.id,
                categorias.nombrecorto AS categoria 
                FROM 
                maratoon.categorias";

            // Prepare
            $pdostmt = $this->pdo->prepare($sql);

            // Establecemos el fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devuelvo objeto clase PDOStatement
            return $pdostmt;

        } catch (PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }

    }

    public function getClubs()
    {
        try {
            
            $sql = "SELECT 
                clubs.id,
                clubs.nombreCorto AS club
                FROM 
                maratoon.clubs";

            // Prepare
            $pdostmt = $this->pdo->prepare($sql);

            // Establecemos el fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt->execute();

            // Devuelvo objeto clase PDOStatement
            return $pdostmt;
        } catch (PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }

    /*
        insertarCorredor()

        Insertar un registro en la base de datos maratoon
    */
    public function insertarCorredor(Corredor $corredor)
    {

        try {
            // Preparar la consulta SQL de inserción con marcadores de posición
            $sql = "INSERT INTO maratoon.corredores (
                nombre,
                apellidos,
                ciudad,
                fechaNacimiento,
                sexo,
                email,
                dni,
                id_categoria,
                id_club
            ) VALUES(
                :nombre,
                :apellidos,
                :ciudad,
                :fechaNacimiento,
                :sexo,
                :email,
                :dni,
                :id_categoria,
                :id_club)";

            // Crear una sentencia preparada
            $pdostmt = $this->pdo->prepare($sql);

            // Vincular los parámetros
            $pdostmt->bindParam(':nombre', $corredor->nombre, PDO::PARAM_STR, 30);
            $pdostmt->bindParam(':apellidos', $corredor->apellidos, PDO::PARAM_STR, 50);
            $pdostmt->bindParam(':ciudad', $corredor->ciudad, PDO::PARAM_STR, 30);
            $pdostmt->bindParam(':fechaNacimiento', $corredor->fechaNacimiento);
            $pdostmt->bindParam(':sexo', $corredor->sexo);
            $pdostmt->bindParam(':email', $corredor->email, PDO::PARAM_STR, 128);
            $pdostmt->bindParam(':dni', $corredor->dni, PDO::PARAM_STR, 9);
            $pdostmt->bindParam(':id_categoria', $corredor->id_categoria, PDO::PARAM_INT);
            $pdostmt->bindParam(':id_club', $corredor->id_club, PDO::PARAM_INT);

            // Ejecutar la sentencia preparada
            $pdostmt->execute();

            // Libero memoria
            $pdostmt = null;

            // Cerrar conexion
            $this->pdo = null;

        } catch (PDOException $e) {
            include('views/partials/errorDB.php');
            exit();
        }
    }

    public function getCategoria($id){
        try {

            // Creamos la consulta
            $sql ="SELECT 
            categorias.nombrecorto as nombre
            FROM 
            maratoon.corredores
            INNER JOIN
            categorias ON 
            categorias.id = corredores.id_categoria
            WHERE 
            corredores.id = :id";

            // Preparamos la consulta
            $pdostmt = $this->pdo->prepare($sql);
            
            // Vinculamos el parámetro
            $pdostmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Seleccionamos el tipo de fetch a usar
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);
            
            // Ejecutamos la consulta
            $pdostmt->execute();
            
            // Devolvemos el resultado
            return $pdostmt->fetch();
        
        } catch(PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }

    /**
     * Método getClub($id)
     * Devuelve el nombre del club, pasandole como parametro el $id del corredor
     */
    public function getClub($id){
        try {

            // Creamos la consulta
            $sql ="SELECT 
            clubs.nombrecorto as nombre
            FROM 
            maratoon.corredores
            INNER JOIN
            clubs ON 
            clubs.id = corredores.id_club
            WHERE 
            corredores.id = :id";

            // Preparamos la consulta
            $pdostmt = $this->pdo->prepare($sql);
            
            // Vinculamos el parámetro
            $pdostmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Seleccionamos el tipo de fetch a usar
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);
            
            // Ejecutamos la consulta
            $pdostmt->execute();
            
            // Devolvemos el resultado
            return $pdostmt->fetch();
        
        } catch(PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }


     /**
     * Funcion para buscar un alumno
     */
    public function read_corredor($id)
    {
        try {

            $sql = "SELECT * 
            FROM maratoon.corredores
            WHERE corredores.id = :id";
            
            // Preparamos la consulta
            $pdostmt = $this->pdo->prepare($sql);
            
            // Vinculamos el parámetro
            $pdostmt->bindParam(":id",$id, PDO::PARAM_INT);
            
            // Seleccionamos el tipo de fetch a usar
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecutamos la consulta
            $pdostmt -> execute();

            // Devolvemos el resultado
            return $pdostmt->fetch();

        } catch (Exception $e) {
            include('views/partials/errorDB.php');
            exit();
        }
    }


    /**
     * Funcion para editar un alumno
     */
    public function update_corredor($id, Corredor $corredor)
    {

        try {
            # Prepare the SQL statement
            $sql = "UPDATE maratoon.corredores SET 
            nombre=:nombre, 
            apellidos=:apellidos, 
            ciudad=:ciudad,
            fechaNacimiento=:fechaNacimiento,
            sexo=:sexo,
            email=:email,
            dni=:dni,
            id_categoria=:id_categoria,
            id_club=:id_club 
            WHERE id= :id";

            # Create a PDOStatement object
            $pdostmt = $this->pdo->prepare($sql);

            # Bind the parameters with values
            $pdostmt->bindParam(':id', $id, PDO::PARAM_INT);
            $pdostmt->bindParam(':nombre', $corredor->nombre, PDO::PARAM_STR, 30);
            $pdostmt->bindParam(':apellidos', $corredor->apellidos, PDO::PARAM_STR, 50);
            $pdostmt->bindParam(':ciudad', $corredor->ciudad, PDO::PARAM_STR, 30);
            $pdostmt->bindParam(':fechaNacimiento', $corredor->fechaNacimiento);
            $pdostmt->bindParam(':sexo', $corredor->sexo);
            $pdostmt->bindParam(':email', $corredor->email, PDO::PARAM_STR, 128);
            $pdostmt->bindParam(':dni', $corredor->dni, PDO::PARAM_STR, 9);
            $pdostmt->bindParam(':id_categoria', $corredor->id_categoria, PDO::PARAM_INT);
            $pdostmt->bindParam(':id_club', $corredor->id_club, PDO::PARAM_INT);

            # Execute the SQL statement
            $pdostmt->execute();

            # Free the PDOStatement object
            $pdostmt = null;

            # Close the connection
            $this->pdo = null;

        } catch (PDOException $e) {
            include('views/partials/errorDB.php');
            exit();
        }
    }

    public function delete_corredor($id)
    {
        try {

            # Prepare o plantilla sql
            $eliminarRegistros = "DELETE FROM 
                maratoon.registros 
                WHERE 
                registros.id_corredor=:id";

            // Preparación de la consulta
            $pdostmtRegistros = $this->pdo->prepare($eliminarRegistros);

            // Vinculamos el parámetro
            $pdostmtRegistros->bindParam(":id", $id, PDO::PARAM_INT);

            // Ejecución de la sentencia
            $pdostmtRegistros->execute();

            // Sentencia eliminación del corredor
            $eliminarCorredor = "DELETE FROM 
                maratoon.corredores 
                WHERE 
                corredores.id = :id";

            // Preparamos la consulta
            $pdostmtCorredor = $this->pdo->prepare($eliminarCorredor);

            // Vinculamos el parámetro
            $pdostmtCorredor->bindParam(":id", $id, PDO::PARAM_INT);

            // Ejecutamos la consulta
            $pdostmtCorredor->execute();

            // Libero memoria
            $pdostmtRegistros = null;
            $pdostmtCorredor = null;

            // Cerramos la conexión a la base de datos
            $this->pdo = null;

        } catch (PDOException $e) {
            include('views/partials/errorDB.php');
            exit();
        }
    }

    public function order($criterio)
    {
        try {
            $sql = "SELECT 
                corredores.id,
                CONCAT_WS(', ',corredores.apellidos, corredores.nombre) as nombre,
                corredores.ciudad,
                corredores.email,
                TIMESTAMPDIFF(YEAR,
                    corredores.fechaNacimiento,
                    NOW()) AS edad,
                categorias.nombrecorto AS categoria,
                clubs.nombreCorto AS club
            FROM
                maratoon.corredores
                    INNER JOIN
                maratoon.categorias ON categorias.id = corredores.id_categoria
                    INNER JOIN
                maratoon.clubs ON clubs.id = corredores.id_club
            ORDER BY $criterio";

            // Preparo la consulta
            $pdostmt = $this->pdo->prepare($sql);

            // Elegimos el tipo de fetch
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);

            // Ejecuto la consulta
            $pdostmt->execute();

            // Devolvemos el objeto de tipo PDOStatement
            return $pdostmt;

        } catch (PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }

    public function filter($expresion)
    {
        try {
            // Creamos sentencia
            $sql = "SELECT 
                corredores.id,
                CONCAT_WS(', ',corredores.apellidos, corredores.nombre) as nombre,
                corredores.ciudad,
                corredores.email,
                TIMESTAMPDIFF(YEAR,
                    corredores.fechaNacimiento,
                    NOW()) AS edad,
                categorias.nombrecorto AS categoria,
                clubs.nombreCorto AS club
            FROM
                maratoon.corredores
                    INNER JOIN
                maratoon.categorias ON categorias.id = corredores.id_categoria
                    INNER JOIN
                maratoon.clubs ON clubs.id = corredores.id_club
            WHERE
            CONCAT_WS('',corredores.apellidos, corredores.nombre,corredores.ciudad,
            corredores.email,TIMESTAMPDIFF(YEAR,corredores.fechaNacimiento,NOW()),
            categorias.nombrecorto,clubs.nombreCorto) LIKE :expresion";
            
            // Modificamos la expresión recibida como parametro
            $expresion = "%".$expresion."%";

            // Preparamos la consulta
            $pdostmt = $this->pdo->prepare($sql);
            
            // Asignamos el valor del parametro
            $pdostmt->bindParam(":expresion",$expresion);
            
            // Establecemos el tipo de fetch a usar
            $pdostmt->setFetchMode(PDO::FETCH_OBJ);
            
            // Ejecutamos la consulta
            $pdostmt->execute();
            
            // Devolvemos el resultado de la consulta
            return $pdostmt;
        } catch (PDOException $e) {
            include 'views/partials/errorDB.php';
            exit();
        }
    }
}

?>
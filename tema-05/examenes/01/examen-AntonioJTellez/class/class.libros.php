<?php

/*
    Clase libros 

    Aquí se definirán los métodos necesarios para completar el examen
    
*/

class Libros extends Conexion
{

    public function getLibros()
    {

        try {
            # Plantilla
            $sql = "
                
                    SELECT 

                        l.id,
                        l.titulo,
                        a.nombre as autor,
                        e.nombre as editorial,
                        l.stock unidades,
                        l.precio_coste as coste,
                        l.precio_venta as pvp

                    FROM 
                        libros as l inner join autores as a
                        ON l.autor_id = a.id 
                        inner join editoriales e
                        ON l.editorial_id = e.id
                    ORDER BY l.id

                ";
            # ejecutar PREPARE
            $result = $this->pdo->prepare($sql);

            # establezco com quiero que devuelva el resultado
            $result->setFetchMode(PDO::FETCH_OBJ);

            # ejecuto
            $result->execute();

            return $result;


        } catch (PDOException $error) {

            include_once('views/partials/partial.errorDB.php');
            exit();

        }

    }

    public function getAutores()
    {

        try {
            # Plantilla
            $sql = "
                
                SELECT 
                        id,
                        nombre
                FROM 
                        autores
                ORDER BY nombre

                ";
            # ejecutar PREPARE
            $result = $this->pdo->prepare($sql);

            # establezco com quiero que devuelva el resultado
            $result->setFetchMode(PDO::FETCH_OBJ);

            # ejecuto
            $result->execute();

            return $result;


        } catch (PDOException $error) {

            include_once('views/partials/partial.errorDB.php');
            exit();

        }

    }

    public function getEditoriales()
    {

        try {
            # Plantilla
            $sql = "
                
                SELECT 
                        id,
                        nombre
                FROM 
                        editoriales

                ORDER BY nombre

                ";
            # ejecutar PREPARE
            $result = $this->pdo->prepare($sql);

            # establezco com quiero que devuelva el resultado
            $result->setFetchMode(PDO::FETCH_OBJ);

            # ejecuto
            $result->execute();

            return $result;


        } catch (PDOException $error) {

            include_once('views/partials/partial.errorDB.php');
            exit();

        }

    }

    public function insertarLibro(Libro $libro)
    {

        try {

            $sql = "
                    INSERT INTO Libros (
                        titulo,
                        isbn,
                        fecha_edicion,
                        autor_id,
                        editorial_id,
                        stock,
                        precio_coste,
                        precio_venta
                        
                    )
                    VALUES (
                        :titulo,
                        :isbn,
                        :fecha_edicion,
                        :autor_id,
                        :editorial_id,
                        :stock,
                        :precio_coste,
                        :precio_venta
                        
                    )
            ";

            $pdoStm = $this->pdo->prepare($sql);

            $pdoStm->bindParam(':titulo', $libro->titulo, PDO::PARAM_STR, 80);
            $pdoStm->bindParam(':isbn', $libro->isbn, PDO::PARAM_STR, 13);
            $pdoStm->bindParam(':fecha_edicion', $libro->fecha_edicion);
            $pdoStm->bindParam(':autor_id', $libro->autor_id, PDO::PARAM_INT);
            $pdoStm->bindParam(':editorial_id', $libro->editorial_id, PDO::PARAM_INT);
            $pdoStm->bindParam(':stock', $libro->stock, PDO::PARAM_INT);
            $pdoStm->bindParam(':precio_coste', $libro->precio_coste);
            $pdoStm->bindParam(':precio_venta', $libro->precio_venta);

            $pdoStm->execute();
        } catch (PDOException $error) {
            include_once('views/partials/partial.errorDB.php');
            exit();
        }


    }

    public function order($criterio)
    {

        try {
            $sql = "
                
                SELECT  l.id,
                        l.titulo,
                        a.nombre as autor,
                        e.nombre as editorial,
                        l.stock unidades,
                        l.precio_coste as coste,
                        l.precio_venta as pvp
                FROM libros as l inner join autores as a
                     ON l.autor_id = a.id
                     inner join editoriales as e
                     ON l.editorial_id = e.id

                order by $criterio
                
                ";

            $pdoStm = $this->pdo->prepare($sql);
            $pdoStm->setFetchMode(PDO::FETCH_OBJ);
            $pdoStm->execute();
            return $pdoStm;
        } catch (PDOException $error) {

            include('views/partials/partial.errorDB.php');
            exit();
        }

    }

}

?>
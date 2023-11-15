<?php

    /*
    
        Clase conexion mediante mysqli
    
    */

    class Conexion {
        //Objeto de la clase mysqli
        public $db;

        public function __construct() {
            try {
                $this->db = new mysqli("localhost","root","", "fp");
                if($this->db->connect_errno) {
                    throw new Exception('ERROR');
                }
            } catch(Exception $e) {
                echo "ERROR: ". $e->getMessage();
                echo "<BR>";
                echo "Código del error: ". $e->getCode();
                echo "<BR>";
                echo "Fichero: ". $e->getFile();
                echo "<BR>";
                echo "Linea: ". $e->getLine();
                echo "<BR>";
                exit();
            }
            
        }
    }

?>
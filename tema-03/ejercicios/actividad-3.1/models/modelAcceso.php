<?php

/*

    Modelo: modelAcceso.php
    Este modelo procesará los valores del formulario

*/

    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $perfil = $_POST['perfil'];

    /*

        Para depurar:

        print_r($_POST);
        exit();

    */

    //Validación

?>
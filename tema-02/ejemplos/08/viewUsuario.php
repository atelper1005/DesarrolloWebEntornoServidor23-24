<!--
    view: viewUsuario.php
    Descripcion: carga la vista del Usuario
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 08 - Tema 2</title>
</head>

<body>
    <center>
        <h2>Ejemplo 01</h2>
    </center>

    <!--
    Para las vistas usar: < ?= $variable ?>
    -->

    <table border="1" width="30%">
        <tr>
            <th>Usuario</th>
            <th>Categoria</th>
            <th>Especialidad</th>
        </tr>
        <tr>
            <th><?= $usuario ?></th>
            <th><?= $categoria ?></th>
            <th><?= $especialidad ?></th>
        </tr>
    </table>

</body>
</html>
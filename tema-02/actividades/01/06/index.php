<!DOCTYPE html>
<html>
<head>
    <title>Información Personal</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Información Personal</h1>

    <?php
    // Declarar las variables y asignar valores
    $Nombre = "Juan";
    $Apellidos = "Pérez López";
    $Poblacion = "Madrid";
    $Edad = 30;
    $Ciclo = "Desarrollo de Aplicaciones Web";
    $Curso = "2023";
    $Modulo = "Programación";

    // Crear una tabla para mostrar los valores
    echo "<table>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    echo "<tr><td>Nombre</td><td>$Nombre</td></tr>";
    echo "<tr><td>Apellidos</td><td>$Apellidos</td></tr>";
    echo "<tr><td>Población</td><td>$Poblacion</td></tr>";
    echo "<tr><td>Edad</td><td>$Edad</td></tr>";
    echo "<tr><td>Ciclo</td><td>$Ciclo</td></tr>";
    echo "<tr><td>Curso</td><td>$Curso</td></tr>";
    echo "<tr><td>Módulo</td><td>$Modulo</td></tr>";
    echo "</table>";
    ?>
</body>
</html>

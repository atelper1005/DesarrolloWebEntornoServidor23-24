<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 5.1 - Gestión Corredores</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <?php include 'views/partials/header.php' ?>

        <legend>Tabla Corredores</legend>

        <!-- Menu Principal -->
        <?php include 'views/partials/menu.php' ?>

        <!-- Notificación -->
        <?php include 'views/partials/notificacion.php' ?>

        <!-- Muestra datos de la tabla -->
        <table class="table">
            <!-- Encabezado tabla -->
            <thead>
                <tr>
                    <!-- personalizado -->
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Email</th>
                    <th class="text-end">Edad</th>
                    <th>Categoría</th>
                    <th>Club</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Mostramos cuerpo de la tabla -->
            <tbody>

                <!-- Objeto mysqli_result puede ser asignado a foreach -->
                <?php foreach ($corredores as $corredor): ?>
                    <tr>
                        <!-- Formatos distintos para cada  columna -->

                        <!-- Detalles de alumnos -->
                        <td><?= $corredor->id ?></td>
                        <td><?= $corredor->nombre ?></td>
                        <td><?=$corredor->ciudad?></td>
                        <td><?=$corredor->email?></td>
                        <td class="text-end"><?= $corredor->edad ?></td>
                        <td><?=$corredor->categoria?></td>
                        <td><?=$corredor->club?></td>
                       
                        <!-- botones de acción -->
                        <td>
                            <!-- botón  eliminar -->
                            <a href="eliminar.php?id=<?= $corredor->id ?>" title="Eliminar">
                            <i class="bi bi-trash-fill"></i></a>

                            <!-- botón  editar -->
                            <a href="editar.php?id=<?= $corredor->id ?>" title="Editar">
                            <i class="bi bi-pencil-square"></i></a>

                            <!-- botón  mostrar -->
                            <a href="mostrar.php?id=<?= $corredor->id?> ?>" title="Mostrar">
                            <i class="bi bi-card-text"></i></a>

                        </td>
                    </tr>

                <?php endforeach; ?>

                

            </tbody>

                <br>
                <br>
                <br>

            <tfoot>
                <tr>
                    <td colspan="7">Nº Corredores
                        <?= $corredores->rowCount(); ?>
                    </td>
                </tr>
            </tfoot>
        </table>

            <br>
            <br>
            <br>

        <!--Cerramos conexión-->
        <?php $corredor = null; $conexion->cerrar_conexion(); ?>


        <!-- Pié del documento -->
        <?php include 'views/partials/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
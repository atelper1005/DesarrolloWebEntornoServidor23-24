<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 5.1 - Gestión Alumnos SQL</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <?php include 'views/partials/header.php' ?>

        <legend>Tabla Alumnos</legend>

        <!-- Menu Principal -->
            <?php include 'views/partials/menu.php' ?>

        <table class="table">
            <!-- Encabezado de tabla -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edad</th></th>
                    <th>Población</th>
                    <th>Teléfono</th>
                    <th>Curso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Cuerpo de tabla -->
            <tbody>
            <?php foreach ($alumnos->getTabla() as $indice => $alumno): ?>
                    <tr>
                        <!-- Mostramos la información de cada alumno en las celdas -->
                        <td>
                            <?= $alumno['id'] ?>
                        </td>
                        <td>
                            <?= $alumno['alumno'] ?>
                        </td>
                        <td>
                            <?= $alumno->email ?>
                        </td>
                        <td>
                            <?= $alumno['EDAD'] ?>
                        </td>
                        <td>
                            <?= $alumno['poblacion'] ?>
                        </td>
                        <td>
                            <?= $alumno['telefono'] ?>
                        </td>
                        <td>
                            <?= $alumno['curso'] ?>
                        </td>
                        <td>
                            <!-- Acciones -->
                            <a href="eliminar.php?id=<?= $indice ?>" title="Eliminar"><i class="bi bi-trash"></i></a>
                            <a href="editar.php?id=<?= $indice ?>" title="Editar"><i class="bi bi-pencil"></i></a>
                            <a href="mostrar.php?id=<?= $indice ?>" title="Mostrar"><i class="bi bi-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">Nº Alumnos
                        <?= $alumnos->num_rows ?>
                    </td>
                </tr>
            </tfoot>
        </table>

        <br>
        <br>
        <br>

        <!-- Pie del codumento -->
        <?php include 'views/partials/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
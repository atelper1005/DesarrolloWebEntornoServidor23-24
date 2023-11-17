<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 4.2 - Gestión Alumnos</title>
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
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Fecha Nacimiento</th>
                    <th>Edad</th></th>
                    <th>Curso</th>
                    <th>Asignaturas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Cuerpo de tabla -->
            <tbody>
            <?php foreach ($alumnos->getTabla() as $indice => $alumno): ?>
                    <tr>
                        <!-- Mostramos la información de cada alumno en las celdas -->
                        <td>
                            <?= $alumno->id ?>
                        </td>
                        <td>
                            <?= $alumno->nombre ?>
                        </td>
                        <td>
                            <?= $alumno->apellidos ?>
                        </td>
                        <td>
                            <?= $alumno->email ?>
                        </td>
                        <td>
                            <?= $alumno->fecha_nacimiento ?>
                        </td>
                        <td>
                            <?= $alumno->getEdad() ?>
                        </td>
                        <td>
                            <?= $alumno->curso ?>
                        </td>
                        <td>
                            <?= implode(', ', ArrayAlumnos::mostrarAsignaturas(ArrayAlumnos::getAsignaturas(), $alumno->asignaturas))?>
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
                    <td colspan="10">Nº Alumnos
                        <?= count($alumnos->getTabla()) ?>
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
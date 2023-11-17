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

        <legend>Formulario Nuevo Alumno</legend>

        <form action="create.php" method="POST">

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <!-- Apellidos -->
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <!-- Fecha Nacimiento -->
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento">
            </div>
            <!-- Curso Select -->
            <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <select class="form-select" aria-label="Default select example" name="curso">
                    <option selected disabled>Seleccione Curso</option>
                    <?php foreach ($cursos as $indice => $curso): ?>
                        <option value="<?= $indice ?>">
                            <?= $curso ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Asignaturas checkbox -->
            <div class="mb-3">
                <label class="form-label">Asignaturas</label>
                <?php foreach ($asignaturas as $indice => $asignatura): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="asignaturas[]" value="<?= $indice ?>">
                        <label class="form-check-label">
                            <?= $asignatura ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Botones -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

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
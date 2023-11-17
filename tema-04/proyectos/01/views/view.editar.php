<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'layouts/head.html' ?>
    <title>Proyecto 4.2 - Gestión Artículos</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- Cabecera documento -->
        <?php include 'partials/header.php' ?>

        <legend>Formulario Editar Alumnos</legend>

        <!-- Menú -->
        <?php include 'partials/menu.php' ?>


        <!-- Formulario Nuevo Artículo -->
        <form action="update.php?indice=<?= $indice ?>" method="POST">

            <!-- ID -->
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" name="id" value="<?= $alumno->id ?>" disabled>
            </div>

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $alumno->nombre ?>">
            </div>
            <!-- Apellidos -->
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $alumno->apellidos ?>">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $alumno->email ?>">
            </div>

            <!-- Fecha Nacimiento -->
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                <input type="text" class="form-control" name="fecha_nacimiento" value="<?= $alumno->fecha_nacimiento ?>">
            </div>

            <!-- Curso -->
            <div class="mb-3">
                <label class="form-label">Seleccionar Curso</label>
                <div class="form-control">
                    <?php foreach ($cursos as $key => $curso): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="<?= $key ?>" name="cursos"
                                <?= (in_array($key, (array) $alumno->curso) ? 'checked' : null) ?>>
                            <label class="form-check-label">
                                <?= $curso ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Asignaturas -->
            <div class="mb-3">
                <label class="form-label">Seleccionar Asignaturas</label>
                <div class="form-control">
                    <?php foreach ($asignaturas as $key => $asignatura): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $key ?>"
                                name="asignaturas[]" <?= (in_array($key, $alumno->asignaturas) ? 'checked' : null) ?>>
                            <label class="form-check-label">
                                <?= $asignatura ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>
        <br>
        <br>
        <br>


    </div>
    <!-- Pie de documento -->
    <?php include 'partials/footer.html' ?>


    <!-- js bootstrap 532-->
    <?php include 'layouts/javascript.html' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 5.1 Gestión Corredores</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <?php include 'views/partials/header.php' ?>

        <legend>Formulario Nuevo Corredor</legend>

        <!-- Formulario Nuevo Libro -->
        <form action="create.php" method="POST">

           <!-- Nombre -->
           <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <!-- Apellidos -->
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <!-- ciudad -->
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad">
            </div>
            <!-- Sexo -->
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                <div class="form-control">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo"
                        value="H" checked>
                    <label class="form-check-label">Hombre</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo"
                        value="M">
                    <label class="form-check-label">Mujer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo"
                        value="">
                    <label class="form-check-label">Sin Especificar</label>
                </div>
                </div>
                
            </div>
            <!-- Fecha de Nacimiento -->
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento">
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="email">
            </div>

            <!-- DNI -->
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" pattern="[0-9]{8}[A-Z]{1}">
            </div>
            <!-- Categorias -->
            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <select class="form-select" aria-label="Default select example" name="id_categoria">
                <option selected disabled>Selecciona una categoria</option>
                <?php foreach($categorias as $categoria):?>
                    <option value="<?=$categoria->id?>">
                    <?=$categoria->categoria?>
                    </option>    
                <?php endforeach; ?>
                </select>
            </div>

            <!-- Clubs -->
            <div class="mb-3">
                <label class="form-label">Club</label>
                <select class="form-select" aria-label="Default select example" name="id_club">
                <option selected disabled>Selecciona una club</option>
                <?php foreach($clubs as $club):?>
                    <option value="<?=$club->id?>">
                    <?=$club->club?>
                    </option>    
                <?php endforeach; ?>
                </select>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <br>
        <br>
        <br>

        <!-- Pié del documento -->
        <?php include 'views/partials/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
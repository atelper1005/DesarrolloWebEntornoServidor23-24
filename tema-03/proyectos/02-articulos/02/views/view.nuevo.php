<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 3.2 - Gestión Tabla Artículos</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <?php include 'views/partials/header.php' ?>

        <legend>Formulario Nuevo Artículo</legend>

        <form action="create.php" method="POST">

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion">
            </div>

            <!-- Modelo -->
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>

            <!-- Marca select -->
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <select class="form-select" aria-label="Default select example" name="marca">
                    <option selected disabled>Seleccione una marca:</option>
                    <?php foreach($marcas as $clave => $marca):  ?>
                        <option value="<?= $clave ?>"><?= $marca ?></option>
                        <?php endforeach; ?>
                </select>
            </div>

            <!-- Categorias Checkbox -->

            <!-- Unidades -->
            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades</label>
                <input type="text" class="form-control" name="unidades">
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>

            <!-- Checkbox Categorias -->
            <div class="mb-3">
                <label for="categorias" class="form-label">

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
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
        <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select class="form-select" name="categoria" method="POST">
                    <option selected disabled>Seleccione una opción:</option>
                    <option value="Portátil">Portátil</option>
                    <option value="PC sobremesa">PC sobremesa</option>
                    <option value="Componentes">Componentes</option>
                    <option value="Pantallas">Pantallas</option>
                    <option value="Impresora">Impresora</option>
                    <option value="Fotografia">Fotografía</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades</label>
                <input type="text" class="form-control" name="unidades">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>

            <!-- Botones -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Pie del codumento -->
        <?php include 'views/partials/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 4.2 - Gestión de Tabla Artículos</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <?php include 'partials/header.php' ?>

        <legend>Formulario Mostrar Artículo</legend>

        <form action="mostrar.php?id=<?= $id ?>" method="POST">
        <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value="<?= $articulo['id'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $articulo['descripcion'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo" value="<?= $articulo['modelo'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" class="form-control" name="categoria" value="<?= $categorias[$articulo['categoria']] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="unidades" class="form-label">Stock</label>
                <input type="text" class="form-control" name="unidades" value="<?= $articulo['unidades'] ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" step="0.01" value="<?= $articulo['precio'] ?>" disabled>
            </div>

            <a class="btn btn-primary" href="index.php" role="button">Volver</a>

        </form>

        <!-- Pie del codumento -->
        <?php include 'views/partials/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>
</html>
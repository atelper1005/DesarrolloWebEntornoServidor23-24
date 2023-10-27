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

        <legend>Tabla Artículos</legend>

        <!-- Menu Principal -->
            <?php include 'views/partials/menu.php' ?>

        <table class="table">
            <!-- Encabezado de tabla -->
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th class="text-end">Stock</th>
                    <th class="text-end">Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Cuerpo de tabla -->
            <tbody>
                <?php foreach ($articulos as $articulo): ?>
                    <tr>
                        <!-- Formatos distintos a cada campo de la tabla -->
                        <td><?= $articulo['id'] ?></td>
                        <td><?= $articulo['descripcion'] ?></td>
                        <td><?= $articulo['modelo'] ?></td>
                        <td><?= $marcas[$articulo['marca']] ?></td>
                        <td><?= implode(', ', mostrarCategorias($categorias, $articulo['categorias'])) ?></td>
                        <td class="text-end"><?= $articulo['unidades'] ?></td>
                        <td class="text-end"><?= number_format($articulo['precio'], 2, ',', '.') ?></td>
                        
                        <!-- botones -->
                    <td>
                        <!-- Botón Eliminar -->
                        <a href="eliminar.php?id=<?=  $articulo['id'] ?>">
                        <i class="bi bi-trash-fill"></i>

                        <!-- Botón Editar -->
                        <a href="editar.php?id=<?= $articulo['id'] ?>">
                        <i class="bi bi-pencil-square"></i>

                        <!-- Botón Mostrar -->
                        <a href="mostrar.php?id=<?= $articulo['id'] ?>">
                        <i class="bi bi-display"></i>
                    </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Nº Artículos
                        <?= count($articulos) ?>
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- Pie del codumento -->
        <?php include 'views/partials/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
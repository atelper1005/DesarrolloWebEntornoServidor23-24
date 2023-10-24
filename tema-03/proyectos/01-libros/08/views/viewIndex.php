<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Proyecto 3.1 - Tabla de libros</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-book"></i>
            <span class="fs-4">Proyecto 3.1 - Tabla de libros
            </span>
            <i class="bi bi-book"></i>
        </header>

        <legend>Tabla Libros</legend>

        <!-- Menu Principal -->
            <?php include 'views/partials/menu_prin.php' ?>

        <table class="table">
            <!-- Encabezado de tabla -->
            <thead>
                <tr>
                    <?php foreach (array_keys($libros[0]) as $clave): ?>
                        <th>
                            <?= $clave ?>
                        </th>
                    <?php endforeach; ?>
                    <th>Acciones</th>
                </tr>
            </thead>
            <!-- Cuerpo de tabla -->
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <!-- Mismo formato a cada campo de la tabla -->
                        <?php foreach ($libro as $campo): ?>
                            <td>
                                <?= $campo ?>
                            </td>
                        <?php endforeach; ?>
                        
                        <!-- botones -->
                    <td>
                        <a href="eliminar.php?id=<?=  $libro['id'] ?>">
                        <i class="bi bi-trash-fill"></i>
                        <a href="editar.php?id=<?= $libro['id'] ?>">
                        <i class="bi bi-pencil-square"></i>
                        <a href="mostrar.php?id=<?= $libro['id'] ?>">
                        <i class="bi bi-display"></i>
                    </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Nº Libros
                        <?= count($libros) ?>
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- Pie del codumento -->
        <?php include 'views/layouts/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/layouts/head.html' ?>
    <title>Calculadora Conversor Decimal</title>

</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-app-indicator"></i>
            <span class="fs-4">Actividad 3.1 - Formulario Registro</span>
        </header>

        <legend>Acceso</legend>
        <form>
            <!-- menu -->
            <ul class="nav">
                <?php if($perfil == 'admin' or $perfil == 'editor'): ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Nuevo</a>
                </li>
                <?php endif; ?>
                <?php if($perfil == 'admin' or $perfil == 'editor'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actualizar</a>
                </li>
                <?php endif; ?>
                <?php if($perfil == 'admin' or $perfil == 'editor' or $perfil == 'usuario'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Consultar</a>
                </li>
                <?php endif; ?>
                <?php if($perfil == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Eliminar</a>
                </li>
                <?php endif; ?>
            </ul>

            <!-- Valores -->
            <table class="table table-primary">
                <tbody>
                    <tr class="table-primary">
                        <th scope="col" colspan="2">Campo: </th>
                        <th scope="col" colspan="2">Valor: </th>
                        <td scope="row">
                            <?= $valor1 ?>
                        </td>
                    </tr>
                </tbody>
            </table>


            <!-- Botones de acción -->

            <div class="btn-group" role="group">

                <a class="btn btn-primary" href="index.php" role="button">Volver</a>

            </div>


        </form>

        <!-- Pie del codumento -->
        <?php include 'views/layouts/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>

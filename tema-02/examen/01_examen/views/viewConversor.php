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
            <i class="bi bi-calculator"></i>
            <span class="fs-4">Calculadora Conversor Decimal</span>
        </header>

        <legend>Resultados de Conversión</legend>
        <form>

            <!-- Valores -->
            <table class="table table-hover">
  <tbody>
  <tr>
      <th scope="col" colspan="2">Decimal: </th>
      <td scope="row"><?= $valor1 ?></td>
    </tr>
    <tr>
        <th scope="col" colspan="2">Binario: </th>
        <td scope="row"><?= $binario ?></td>
    </tr>
    <tr>
        <th scope="col" colspan="2">Octal: </th>
        <td scope="row"><?= $octal ?></td>
    </tr>
    <tr>
        <th scope="col" colspan="2">Hexadecimal: </th>
        <td scope="row"><?= $hexadecimal ?></td>
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
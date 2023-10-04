<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'views/plantilla/head.html' ?>
    <title>Proyecto 2.2 - Lanzamiento de Proyectiles</title>

</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera Documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-rocket-takeoff-fill"></i>
            <span class="fs-4">Proyecto 2.2 - Lanzamiento de Proyectiles</span>
            <i class="bi bi-rocket-takeoff-fill"></i>
        </header>

        <legend>Resultado</legend>
        <form>

            <!-- Valores -->
            <table class="table table-hover">
  <tbody>
    <tr>
      <th scope="col" colspan="2">Valores Iniciales: </th>
    </tr>
    <tr>
      <td scope="row">Velocidad Inicial: </td>
      <td><?= $velInicial ?></td>
    </tr>
    <tr>
      <td scope="row">Ángulo Inclinación: </td>
      <td><?= $angulo ?></td>
    </tr>
    <tr>
      <th scope="col" colspan="2">Resultados: </th>
    </tr>
    <tr>
      <td scope="row">Ángulo Radianes: </td>
      <td><?= $radianes ?> Radianes</td>
    </tr>
    <tr>
      <td scope="row">Velocidad Inicial X: </td>
      <td><?= $velInicialX ?> m/s </td>
    </tr>
    <tr>
      <td scope="row">Velocidad Inicial Y: </td>
      <td><?= $velInicialY ?> m/s </td>
    </tr>
    <tr>
      <td scope="row">Alcance Máximo del Proyectil: </td>
      <td><?= $alcance ?> m </td>
    </tr>
    <tr>
      <td scope="row">Tiempo de Vuelo del Proyectil: </td>
      <td><?= $tiempoVuelo ?> s </td>
    </tr>
    <tr>
      <td scope="row">Altura Máxima del Proyectil: </td>
      <td><?= $altura ?> m </td>
    </tr>
  </tbody>
</table>


            <!-- Botones de acción -->

            <div class="btn-group" role="group">

                <a class="btn btn-primary" href="index.php" role="button">Volver</a>

            </div>


        </form>

        <!-- Pie del codumento -->
        <?php include 'views/plantilla/footer.html' ?>
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/plantilla/javascript.html' ?>
</body>

</html>
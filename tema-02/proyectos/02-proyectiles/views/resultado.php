<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto 2.2 - Lanzamiento de Proyectiles</title>

    <!-- css bootstrap 5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Iconos bootstrap 1.11.1-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

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

                <a class="btn btn-primary" href="index.html" role="button">Volver</a>

            </div>


        </form>

        <!-- Pie del codumento -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">
                    © 2023 Antonio Jesús Téllez Perdigones - DWES - 2º DAW - Curso 23/24
                </span>
            </div>
        </footer>
    </div>

    <!-- javascript bootstrap 532 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
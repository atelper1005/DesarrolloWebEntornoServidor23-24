<!-- Crear view.mostrar.php a partir de view.nuevo.php -->
<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("layouts/layout.head.php") ?>
    <title>Mostrar Película - CRUD Tabla Películas</title>
  </head>
  <body>
    <div class="container">    

      <!-- Incluimos Cabecera -->
      <?php include("partials/partial.cabecera.php") ?> 

      <legend>
        Formulario Mostrar Película
      </legend>

      <form action="mostrar.php?id=<?= $id ?>" method="POST">
            <!-- Campo ID Oculto-->
            <div class="mb3"> 
                <label class="form-label">Id</label>
                <input name = "id" type="text" class="form-control" value="<?= $pelicula['id'] ?>" disabled>
            </div>

            <!-- Campo título -->
            <div class="mb3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" value="<?= $pelicula['titulo'] ?>" disabled>
            </div>

            <!-- País Select -->
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" value="<?= $pelicula['pais'] ?>" disabled>
            </div>

            <!-- Campo director -->
            <div class="mb3">
                <label class="form-label">Director</label>
                <input name = "" type="text" class="form-control" value="<?= $pelicula['director'] ?>" disabled>
            </div>

            <!-- Campo Año -->
            <div class="mb3">
                <label class="form-label">Año</label>
                <input name = "" type="number" class="form-control" value="<?= $pelicula['año'] ?>" disabled>
            </div>

             <!-- Géneros -->
             <div class="mb-3">
                <label class="form-label">Géneros</label>
                <input type="text" class="form-control" value="<?= $generos[$pelicula['genero']] ?>" disabled>
            </div>

            <br>
            <div class="mb3" role="group">
              <a class="btn btn-primary" href="index.php" role="button">Volver</a>
            </div>
      </form>
      <br>
      <br>
      <br>
      <!-- Incluimos Partials footer -->
      <?php include("partials/partial.footer.php") ?>
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("layouts/layout.javascript.php") ?>
  </body>
</html>
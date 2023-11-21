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

      <form>
            <!-- Campo ID Oculto-->
            <div class="mb3"> 
                <label class="form-label">Id</label>
                <input name = "id" type="text" class="form-control" value="<?= $pelicula->id ?>" disabled>
            </div>

            <!-- Campo título -->
            <div class="mb3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" value="<?= $pelicula->titulo ?>" disabled>
            </div>

            <!-- País Select -->
            <div class="mb-3">
                <label class="form-label">País</label>
                <select class="form-select" aria-label="Default select example" name="pais" disabled>
                    <?php foreach ($paises as $key => $pais): ?>
                        <option value="<?= $key ?>" <?= ($pelicula->pais == $key) ? 'selected' : null ?> disabled>
                            <?= $pais ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Campo director -->
            <div class="mb3">
                <label class="form-label">Director</label>
                <input name = "" type="text" class="form-control" value="<?= $pelicula->director ?>" disabled>
            </div>

            <div class="mb-3">
                <label for="generos" class="form-label">Géneros</label>
                <input type="text" class="form-control"
                    value="<?= implode(', ', ArrayPeliculas::mostrarGeneros($generos, $pelicula->generos)) ?> "
                    disabled>
            </div>

            <!-- Campo Año -->
            <div class="mb3">
                <label class="form-label">Año</label>
                <input name = "" type="number" class="form-control" value="<?= $pelicula->ano ?>" disabled>
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
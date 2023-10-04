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
                <span class="fs-4">Proyecto 2.2 - Lanzamiento de Proyectiles
                </span>
                <i class="bi bi-rocket-takeoff-fill"></i>
            </header>

            <legend>Lanzamiento de Proyectiles</legend>
            <form method="POST" action="calcular.php">

                <!-- Valores -->
                <div class="mb-3">
                    <label class="form-label">Velocidad Inicial:</label>
                    <input type="number" name="velInicial" class="form-control" placeholder="0" aria-describedby="helpId" step="0.01" >
                    <small id="helpId" class="text-muted">Velocidad en m/s</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ángulo Lanzamiento</label>
                    <input type="number" name="angulo" class="form-control" placeholder="0" aria-describedby="helpId" step="0.01" >
                    <small id="helpId" class="text-muted">Ángulo en grados</small>
                </div>

                <!-- Botones de acción -->

                <div class="btn-group" role="group">
                    <button type="reset" class="btn btn-secondary" >Borrar</button>
                    <button type="submit" class="btn btn-warning ">Calcular</button>
                    
                </div>


            </form>

            <!-- Pie del codumento -->
            <?php include 'views/plantilla/footer.html' ?>
        </div>

        <!-- javascript bootstrap 532 -->
        <?php include 'views/plantilla/javascript.html' ?>
    </body>
</html>

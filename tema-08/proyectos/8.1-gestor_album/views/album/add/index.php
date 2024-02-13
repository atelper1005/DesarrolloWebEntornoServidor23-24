<!doctype html>
<html lang="en">
<head>
    <!-- head -->
    <?php require_once("template/partials/head.php") ?>
    <title><?= $this->title ?></title>
</head>

<body>
    <!-- Menú Principal -->
	<?php require_once("template/partials/menuAut.php") ?>
	<br><br><br>

    <div class="container">
        
        <!-- header -->
        <?php include 'views/album/partials/header.php' ?>

        <!-- comprobamos si existe error -->
        <?php include 'template/partials/error.php' ?>

        <legend>Formulario Subida de imagenes</legend>
        
        <form method="POST" enctype="multipart/form-data">
            <!-- Campo oculto validar tamaño (5 MB)-->
            <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
            
            <!-- Fichero con validación cliente mediante parametro accept -->
            <div class="mb-3">
                <label for="formFile" class="form-labl">Seleccione archivo</label>
                <input type="file" class="form-control" name="fichero" id="formFile" value="<?=$fichero?>" accept="image/*">
                <!-- errores -->
                <span class="form-text text-danger" role="alert">
                    <?=$errores['fichero'] ??= null ?>
                </span>
            </div>
            <!-- Botones de acción -->
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" formaction="validar.php">Enviar</button>
            </div>
        </form>
    </div>
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">© 2024
                Antonio Jesús Téllez Perdigones - DWES - 2º DAW - Curso 23/24</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
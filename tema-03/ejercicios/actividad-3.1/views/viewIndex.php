<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir head -->
    <?php include 'layouts/head.html'; ?>
    <title>Actividad 3.1 - Formulario Registro</title>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-app-indicator"></i>
            <span class="fs-6">Actividad 3.1 - Formulario Registro</span>
        </header>

        <legend>Formulario Registro</legend>
        <form method="POST" action="acceso.php">

            <!-- Formulario -->
            <!-- usuario -->
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="usuario">
                <div id="usuario" class="form-text">Entre 8 y 15 carácteres</div>
            </div>

            <!-- email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Introduzca email válido</div>
            </div>

            <!-- password -->
            <div class="mb-3 form-check">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <!-- password confirm -->
            <div class="mb-3 form-check">
                <label class="form-label">Password confirmación</label>
                <input type="password" class="form-control" name="passwordConfirm">
            </div>

            <!-- perfiles -->
            <select class="form-select" aria-label="Default select example" name="perfil">
                <option selected disabled>Seleccione Perfil</option>
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
                <option value="usuario">Usuario</option>
            </select>

            <br>
            <!-- Botones de acción -->
            <button type="reset" class="btn btn-secondary">Borrar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>

        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>
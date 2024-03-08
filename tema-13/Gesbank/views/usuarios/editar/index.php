<!DOCTYPE html>
<html lang="es">

<head>
    <!-- bootstrap  -->
    <?php require_once("template/partials/head.php");  ?>
    <title>Editar Usuario - Gesbank</title>
</head>


<!-- menu fijo superior -->
<?php require_once "template/partials/menuAut.php"; ?>
<br><br><br>

<!-- capa principal -->
<div class="container">

    <!-- cabecera -->
    <?php include "views/usuarios/partials/header.php" ?>

    <legend>Formulario Editar Usuario</legend>

    <!-- Mensaje de Error -->
    <?php include 'template/partials/error.php' ?>

    <!-- Formulario -->
    <form action="<?= isset($this->usuario->id) ? URL . 'usuarios/update/' . $this->usuario->id : '#' ?>"
            method="POST">

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre"
                    value="<?= isset($this->usuario->name) ? $this->usuario->name : (isset($_SESSION['usuario']) ? $_SESSION['usuario']->name : '') ?>">

                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['nombre'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['nombre'] ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"
                    value="<?= isset($this->usuario->email) ? $this->usuario->email : (isset($_SESSION['usuario']) ? $_SESSION['usuario']->email : '') ?>">

                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['email'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['email'] ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Roles -->
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select" name="rol">
                    <?php foreach ($this->roles as $rol): ?>
                        <option value="<?= $rol->id ?>" <?= ($rol->id == $this->model->getRoleOfUser($this->usuario->id)->id) ? 'selected' : '' ?>>
                            <?= $rol->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="password" class="form-label">Cambiar password</label>
                <input type="password"
                    class="form-control <?= (isset($this->errores['password'])) ? 'is-invalid' : null ?>"
                    name="password">

                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['password'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['password'] ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Confirmar password -->
            <div class="mb-3">
                <label for="confirmarpassword" class="form-label">Confirmar Cambio password</label>
                <input type="password"
                    class="form-control <?= (isset($this->errores['confirmarpassword'])) ? 'is-invalid' : null ?>"
                    name="confirmarpassword">

                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['confirmarpassword'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['confirmarpassword'] ?>
                    </span>
                <?php endif; ?>
            </div>

        <!-- Botones de Acción -->
        <div class="mb-3">
            <a name="" id="" class="btn btn-secondary" href="<?= URL ?>clientes" role="button">Cancelar</a>
            <button type="button" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>

<br><br><br>

<!-- footer -->
<?php require_once "template/partials/footer.php" ?>

<!-- Bootstrap JS y popper -->
<?php require_once "template/partials/javascript.php" ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
<?php require_once("template/partials/head.php") ?>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera -->
        <?php require_once("views/alumno/partials/header.php") ?>
        <legend><?=$this->title?></legend>

        <!-- El menú no es necesario-->

        <!-- Formulario Nuevo Alumno -->
        <form action="<?=URL?>alumno/create" method="POST">
            <!-- id (no se deberá ni mostrar, ni estar oculto-->
            
            <!-- Nombre -->
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['nombre'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['nombre'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Apellidos -->
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['apellidos'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['apellidos'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="email">
                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['email'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['email'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Telefono -->
            <div class="mb-3">
                <label class="form-label">Télefono</label>
                <input type="number" class="form-control" name="telefono">
            </div>
            <!-- Dirección -->
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion">
                <!-- Mostrar posibles errores -->
                <?php if (isset($this->errores['direccion'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['direccion'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Población -->
            <div class="mb-3">
                <label class="form-label">Población</label>
                <input type="text" class="form-control" name="poblacion">
                <!-- Mostrar posibles errores -->
                <?php if (isset($this->errores['poblacion'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['poblacion'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Provincia -->
            <div class="mb-3">
                <label class="form-label">Provincia</label>
                <input type="text" class="form-control" name="provincia">
                <!-- Mostrar posibles errores -->
                <?php if (isset($this->errores['provincia'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['provincia'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Nacionalidad -->
            <div class="mb-3">
                <label class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" name="nacionalidad">
                <!-- Mostrar posibles errores -->
                <?php if (isset($this->errores['nacionalidad'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['nacionalidad'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- DNI -->
            <div class="mb-3">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" pattern="[0-9]{8}[A-Z]{1}">
                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['dni'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['dni'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Fecha Nacimiento -->
            <div class="mb-3">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNac">
                <!-- Mostrar posible error -->
                <?php if (isset($this->errores['fechaNac'])): ?>
                    <span class="form-text text-danger" role="alert">
                        <?= $this->errores['fechaNac'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <!-- Curso -->
            <div class="mb-3">
                <label class="form-label">Curso</label>
                <select class="form-select" aria-label="Default select example" name="id_curso">
                    <option selected disabled>Selecciona un curso:</option>
                    <?php foreach ($this->cursos as $data): ?>
                        <option value="<?= $data->id ?>" <?= ($data->id == $this->alumno->id_curso) ? 'selected' : null ?>>
                            <?= $data->curso ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>



            <div class="mb-3">
                <a class="btn btn-secondary" href="<?=URL?>alumno" role="button">Cancelar</a>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>

        </form>
        <br>
        <br>
        <br>
        <!-- Pie de documento -->
        <?php require_once("template/partials/footer.php") ?>

    </div>


	<?php require_once("template/partials/javascript.php") ?>
</body>

</html>
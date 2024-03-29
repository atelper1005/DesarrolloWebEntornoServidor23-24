
<body>
    <!-- Menú Principal -->
    <?php require_once("template/partials/menu.php") ?>
    <br><br><br>

    <!-- Capa principal -->
    <div class="container">

        <!-- header -->
        <?php include 'views/cuenta/partials/header.php' ?>

        <legend>Formulario Nueva Cuenta</legend>

        <!-- Formulario Nueva Cuenta -->
        <form action="<?= URL ?>cuenta/create" method="POST">

            <!-- numero_cuenta -->
            <div class="mb-3">
                <label for="num_cuenta" class="form-label">Nº de la cuenta</label>
                <input type="text" class="form-control" name="num_cuenta" maxlength="20">
            </div>
            <!-- cliente -->
            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select class="form-select" aria-label="Default select example" type="number" name="id_cliente">
                    <option selected>Seleccione Cliente</option>
                    <?php foreach ($this->clientes as $cliente): ?>
                        <option value="<?= $cliente->id ?>">
                            <?= $cliente->clienteCuenta ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>


            <!-- fecha_alta -->
            <div class="mb-3">
                <label for="fecha_alta" class="form-label">Fecha de alta</label>
                <input type="datetime-local" class="form-control" name="fecha_alta">
            </div>
            <!-- fecha_ul_mov -->
            <div class="mb-3">
                <label for="fecha_ul_mov" class="form-label">Fecha último movimiento</label>
                <input type="datetime-local" class="form-control" name="fecha_ul_mov">
            </div>
            <!-- num_movtos -->
            <div class="mb-3">
                <label for="num_movtos" class="form-label">Nº de movimientos totales</label>
                <input type="text" class="form-control" name="num_movtos">
            </div>
            <!-- saldo -->
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="text" class="form-control" name="saldo">
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="<?= URL ?>cuentas" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <br>
        <br>
        <br>




        <!-- Pié del documento -->
        <?php include 'template/partials/footer.php' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'template/partials/javascript.php' ?>
</body>

</html>
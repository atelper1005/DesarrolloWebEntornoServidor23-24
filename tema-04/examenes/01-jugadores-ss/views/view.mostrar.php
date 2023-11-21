<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("layouts/layout.head.php");?>
    <title>Jugador - Mostrar </title> 
</head>
<body>
    <!-- Capa Principal -->
    <div class="container">

        <?php include("partials/partial.header.php"); ?>

        <legend>Formulario Mostrar Jugador</legend>

      <form>
        <!-- id -->
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" name="id" value="<?= $jugador['id']?>" readonly>
            <!-- <div class="form-text">Introduzca identificador del libro</div> -->
        </div>
        <!-- Descripción -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $jugador['nombre']?>" readonly >
        </div>
        <!-- Modelo -->
        <div class="mb-3">
            <label for="numero" class="form-label">Num</label>
            <input type="text" class="form-control" name="numero" value="<?= $jugador['numero']?>" readonly>
            <!-- <div class="form-text">Introduzca Autor del libro</div> -->
        </div>
        <!-- Categoría Select -->
        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" class="form-control" name="pais" value="<?= $paises[$jugador['pais']]?>" readonly>
        </div>
        <!-- Unidades -->
        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo</label>
            <input type="text" class="form-control" name="equipo" step="0.01" value="<?= $jugador['equipo']?>" readonly >
            <!-- <div class="form-text">Introduzca Precio</div> -->
        </div>
        <div class="mb-3">
            <label for="posiciones" class="form-label">Posiciones</label>
            <input type="text" class="form-control" name="posiciones" step="0.01" value="<?= $jugador['posiciones']?>" readonly >
            <!-- <div class="form-text">Introduzca Precio</div> -->
        </div>
        <!-- Precio -->
        <div class="mb-3">
            <label for="contrato" class="form-label">Contrato (€)</label>
            <input type="number" class="form-control" name="contrato" step="0.01" value="<?= $jugador['contrato']?>" readonly >
            <!-- <div class="form-text">Introduzca Precio</div> -->
        </div>
        
        
        <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
        
      </form>

      <br><br><br>

    <!-- Pie del documento -->
    <?php include("partials/partial.footer.php");?>

    <!-- Bootstrap Javascript y popper -->
    <?php include("layouts/layout.javascript.php");?>
 
</body>
</html>
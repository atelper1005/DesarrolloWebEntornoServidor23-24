<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos layout.head.php -->
    <?php include('layouts/layout.head.php') ?>
    
    <title>Home - CRUD Tabla Películas</title>
  </head>
  
  <body>
    <div class="container">
      
      <!-- Cabecera -->
      <!-- Incluimos partial.cabecera.php -->
      <?php include('partials/partial.cabecera.php') ?>
  
      <legend>
        Tabla Películas
      </legend>

      <!-- Incluimos Partials menu -->
      <!-- Incluimos partial.menu.php -->
      <?php include('partials/partial.menu.php') ?>

      <!-- Generamos la tabla de libros -->
      <table class="table">
        <!-- Generamos el encabezado de la tabla películas -->
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>País</th>
            <th>Director</th>
            <th>Géneros</th>
            <th>Año</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Mostramos los detalles de las películas -->
          <?php foreach ($peliculas->getTabla() as $row => $pelicula): ?>
            <!-- Muestro los datos de la película -->
            <tr>
              <td><?= $pelicula->id ?></td>
              <td><?= $pelicula->titulo ?></td>
              <td><?= $pelicula->pais ?></td>
              <td><?= $pelicula->director ?></td>
              <td><?= implode(', ', ArrayPeliculas::mostrarGeneros(ArrayPeliculas::getGeneros(), $pelicula->generos)) ?></td>
              <td><?= $pelicula->ano ?></td>          
            
              <!-- Muestro los botones de acción -->
              <td>
                <a href="eliminar.php?id=<?=$idPelicula?>" Title="Eliminar"><i class="bi bi-trash-fill"></i></a>
                <a href="editar.php?id=<?=$idPelicula?>" Title="Modificar"><i class="bi bi-pencil-square"></i></a>
                <a href="mostrar.php?id=<?=$idPelicula?>" Title="Mostrar"><i class="bi bi-eye"></i></a>
              </td>
            <!-- Fin botones de acción -->
            
            </tr>
          <?php endforeach; ?>
          <tfoot>
            <tr>
              <td colspan="7">Número Registros: <?= count($peliculas->getTabla()) ?></td>
            </tr>
          </tfoot>
          
        </tbody>
      </table>
      
      <!-- Incluimos Partials footer -->
      <?php include('partials/partial.footer.php') ?>
      <!-- Incluimos partial.footer.php -->
      
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <!-- Incluimos layout.javascript.php -->
    <?php include('layouts/layout.javascript.php') ?>

  </body>
</html>
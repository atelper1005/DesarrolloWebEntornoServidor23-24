<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Alumnos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=URL?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>alumno/new">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ordenar
                    </a>
                    <!-- Deberemos enviar el criterior de ordenacion de forma dinamica -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/1">Nombre</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/2">Email</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/3">Telefono</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/4">Poblacion</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/5">DNI</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/6">Edad</a></li>
                        <li><a class="dropdown-item" href="<?= URL ?>alumno/order/7">Curso</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search" method="GET" action="filtrar.php">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search" name="expresion">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
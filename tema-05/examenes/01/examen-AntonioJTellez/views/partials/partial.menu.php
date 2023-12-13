<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Libros</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="nuevo.php">Nuevo</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ordenar.php?criterio=id">ID</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=titulo">Título</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=autor_id">Autor</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=editorial_id">Editorial</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=unidades">Unidades</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=precio_coste">Coste</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=precio_venta">Precio Venta</a></li>
                    </ul>
                    </li>
                    
                </ul>
                <form class="d-flex" method="GET" action="buscar.php">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="expresion">
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </form>
                </div>
            </div>
        </nav>
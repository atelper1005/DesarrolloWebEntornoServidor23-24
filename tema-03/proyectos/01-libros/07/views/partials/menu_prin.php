<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Libros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nuevo.php">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ordenar.php?criterio=titulo">Título</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=autor">Autor</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=genero">Género</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=precio">Precio</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" method="GET" action="buscar.php">
                <input class="form-control me-2" type="search" placeholder="prompt" aria-label="Search" name="expresion">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
=======
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Libros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nuevo.php">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ordenar.php?criterio=titulo">Título</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=autor">Autor</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=genero">Género</a></li>
                        <li><a class="dropdown-item" href="ordenar.php?criterio=precio">Precio</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" method="GET" action="buscar.php">
                <input class="form-control me-2" type="search" placeholder="prompt" aria-label="Search" name="expresion">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
>>>>>>> 1b65408621ed418d8d6c174feec0dcda1c62ea70
</nav>
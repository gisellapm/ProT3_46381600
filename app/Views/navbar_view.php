<nav class="navbar navbar-expand-lg" style="background-color:rgb(240, 98, 146);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex w-100 align-items-center space-between">
                <!-- Sección izquierda: Nombre -->
                <div class="flex-shrink-0">
                    <img src="assets/img/logogrande.png" class="d-inline-block align-text-top max-w-100" style="max-height: 50px;">
                </div>
                <!-- Sección centro: Menú principal -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href='principal_view'>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='sobre_nosotros'>Sobre Nosotros</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='acerca_de'>Acerca de</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='registro'>Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='login'>Login</a>
                    </li>  
                </ul>
                <!-- Sección derecha: Buscador -->
                <form class="d-flex ms-3" role="search" style="min-width:200px; max-width:300px; width:100%;">
                    <input class="form-control me-2 w-100 bg-body-secondary" type="search" placeholder="¿Qué estás buscando?" aria-label="Search"/>
                    <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</nav>
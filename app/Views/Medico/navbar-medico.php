    <!-- //Navbar de opciones -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; width: 100%;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0; width: 100%;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestión de citas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Medico&action=cita_control">Agendar cita de control</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="medico-consultar-estado.html">Gestionar cita agendada</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Consultar Itinerario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="medico-ayuda.html">Ayuda</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Medico&action=login">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
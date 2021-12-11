    <!-- //Navbar de opciones del médico-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0; width: 100%;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestión de citas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Medico&&action=cita_medica">Agendar Cita</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=Medico&&action=cancelar_cita_medico">Cancelar Cita</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=Medico&&action=reprogramar_cita">Reprogramar Cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Medico&&action=itinerario">Consultar Itinerario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Medico&&action=ayuda">Ayuda</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                    <a class="btn btn-outline-dark" href="?controller=Medico&&action=login" data-target=".navbar-collapse.show">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
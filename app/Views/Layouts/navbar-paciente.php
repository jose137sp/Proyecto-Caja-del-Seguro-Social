    <!-- //Navbar de opciones -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0; width: 100%;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programar Cita Médica
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Paciente&action=registrarse">Paciente Nuevo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=Paciente&action=cita_nueva">Paciente Registrado</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Paciente&action=consultar_cita">Consultar estado de cita</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=Paciente&action=cancelar">Cancelar Cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Paciente&action=ayuda">Ayuda</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                        <a class="btn text-light bg-dark" href="?controller=Paciente&action=index">Sitio para pacientes</a>
                    </li>
                </ul>
            </div>
            <div class="navbar py-lg-0" id="navbarSupportedContent"
                style="padding-left: 0; justify-content: left; white-space: nowrap;">
                <ul class="navbar-nav mr-auto" style="width: 100%;">
                    <li class="nav-item">
                        <a class="btn btn-outline-dark" href="?controller=Medico&action=login">Sitio para médicos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //Navbar de opciones -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; width: 100%;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0; width: 100%;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programar Cita Médica
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Paciente&action=cita_nueva">Cita nueva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=Paciente&action=cita_control">Cita de control</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?controller=Paciente&action=consultar_cita">Consultar estado de cita</a>
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
                    <a class="nav-link" href="?controller=Paciente&action=index">Sitio para pacientes</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Medico&action=login">Sitio para médicos</a>
                </li>
            </ul>
        </div>
    </nav>
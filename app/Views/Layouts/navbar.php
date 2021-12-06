    <!-- //Navbar de logo -->
    <nav class="navbar navbar-dark" style="background-color: #005C8F;">
        <a class="navbar-brand" href="index.php">
            <img src="/app/Assets/Images/logo.png" width="100%" height="50" alt="" class="img-thumbnail"
                style="background-color: #005C8F; border: #005C8F;">
        </a>
    </nav>
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
                        <a class="dropdown-item" href="../Paciente/cita-nueva.php">Cita nueva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Paciente/cita-control.php">Cita de control</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadass
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../Paciente/consultar-estado.php">Consultar estado de cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Paciente/ayuda.php">Ayuda</a>
                </li>
            </ul>
        </div>
        <div class="navbar py-lg-0" id="navbarSupportedContent"
            style="padding-left: 0; justify-content: left; white-space: nowrap;">
            <ul class="navbar-nav mr-auto" style="width: 100%;">
                <li class="nav-item">
                    <a class="nav-link" href="../Medico/medico-login.php">Sitio para médicos</a>
                </li>
            </ul>
        </div>
    </nav>
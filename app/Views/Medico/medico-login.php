<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="Medico/medico-login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>CSS - Inicio de sesión</title>
</head>

<body>
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
                        <a class="dropdown-item" href="cita-nueva.html">Cita nueva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cita-control.html">Cita de control</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="consultar-estado.html">Consultar estado de cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ayuda.html">Ayuda</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
            <li class="breadcrumb-item">Vista médico</li>
            <li class="breadcrumb-item active" aria-current="page">Iniciar sesión</li>
        </ol>
    </nav>

    <!-- Sección de inicio -->
    <section class="py-5">

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Titulo -->
                <div class="fadeIn first">
                    <h4 style="padding-top: 20px;">Inicio de sesión para médicos</h4>
                    <hr>
                </div>

                <!-- Login Form -->
                <form action="?controller=Medico&&action=index" method="POST">
                    <input type="text" id="login" class="fadeIn second" name="cedula" placeholder="Cédula" required>
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña" required>
                    <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Iniciar sesión</button>
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <p>
                        ¿Tienes problemas? <a href="">Contáctanos</a>
                    </p>
                </div>

            </div>
        </div>
    </section>
</body>

</html>
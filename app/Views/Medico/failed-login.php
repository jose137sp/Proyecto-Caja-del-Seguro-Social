<head>
    <title>Datos Erroneos</title>
</head>

<body>


    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Inicio de sesión</li>
            <li class="breadcrumb-item active" aria-current="page">Datos Erroneos</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">¡Error al iniciar sesión!</h4>
            <br>
            <h5 class="display-4">Usuario o contraseña incorrectos</h5>
            <br>
            <p class="lead">
                <a class="btn" href="?controller=Medico&&action=login" role="button" style="background-color: #0053a3; color: white;">Regresar</a>
            </p>
            <br><br>
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=ayuda">Contáctanos</a>
            </p>
        </div>
    </div>
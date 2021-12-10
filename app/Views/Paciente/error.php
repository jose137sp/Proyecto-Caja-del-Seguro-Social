<head>
    <title>Datos Erroneos</title>
</head>

<body>

    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Registrar Datos</li>
            <li class="breadcrumb-item active" aria-current="page">Datos Erroneos</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">¡Algo salió mal!</h4>
            <br>
            <br>
            <p class="lead">
                <a class="btn" href="?controller=Paciente&&action=registrarse" role="button" style="background-color: #005C8F; color: white;">Regresar</a>
            </p>
            <br><br>
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=ayuda">Contáctanos</a>
            </p>
        </div>
    </div>
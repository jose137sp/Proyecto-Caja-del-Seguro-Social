
<body>
    <!-- //Navbar de opciones -->
    <?php require_once('navbar-medico.php'); ?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Medico&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="?controller=Medico&action=cita_control">Cita de Control</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de la cita anterior</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">Datos de la cita anterior:</h4>
            <p class="lead"><strong>Fecha: </strong>00/00/0000</p>
            <p class="lead"><strong>Policlínica: </strong>xxxxxxxxx</p>
            <p class="lead"><strong>Numéro de cita: </strong>xxxxxxxxx</p>
            <hr>
            <p class="lead">
                <a class="btn" href="?controller=Medico&&action=datos_cita" role="button" style="background-color: #005C8F; color: white;">Agendar nuevo control</a>
            </p>
        </div>
    </div>
</body>
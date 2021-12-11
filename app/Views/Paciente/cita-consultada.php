    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

<!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item">Citas programadas</li>
            <li class="breadcrumb-item"><a href="consultar-estado.html">Consultar estado de cita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de la cita</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">Estado de la cita:</h4>
            <p class="lead"><strong>Fecha: </strong>00/00/0000</p>
            <p class="lead"><strong>Policlínica: </strong>xxxxxxxxx</p>
            <p class="lead"><strong>Numéro de cita: </strong>xxxxxxxxx</p>
            <p class="lead"><strong>Estado: </strong>xxxxxxxxx</p>
            <hr>
            <a class="a" href="consultar-estado-cancelar.html" style="color: #eb0000; font-weight: bold;">Cancelar cita</a>
            <hr>
            <p>
                ¿Tienes problemas? <a href="">Contáctanos</a>
            </p>
            <p class="lead">
                <a class="btn" href="index.html" role="button" style="background-color: #0053a3; color: white;">Menú principal</a>
            </p>
        </div>
    </div>

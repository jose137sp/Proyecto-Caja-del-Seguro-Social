    <?php require_once('navbar-medico.php')?>    <!-- //Navbar de opciones -->
    
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Medico&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="?controller=Medico&&action=cita_control">Cita de Control</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de la cita agendada</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">Su cita ha sido agendada.</h4>
            <p class="lead"><strong>Fecha: </strong>00/00/0000</p>
            <p class="lead"><strong>Policlínica: </strong>xxxxxxxxx</p>
            <p class="lead"><strong>Numéro de cita: </strong>xxxxxxxxx</p>
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Medico&&action=ayuda">Contáctanos</a>
            </p>
            <p class="lead">
                <a class="btn" href="?controller=Medico&&action=index" role="button" style="background-color: #0053a3; color: white;">Menú principal</a>
            </p>
        </div>
    </div>
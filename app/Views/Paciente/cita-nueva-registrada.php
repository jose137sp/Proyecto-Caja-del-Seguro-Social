
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item">Cita Nueva</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cita agendada</li>
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
                ¿Tienes problemas? <a href="?controller=Paciente&&action=">Contáctanos</a>
            </p>
            <p class="lead">
                <a class="btn" href="?controller=Paciente&&action=index" role="button" style="background-color: #005C8F; color: white;">Menú principal</a>
            </p>
        </div>
    </div>
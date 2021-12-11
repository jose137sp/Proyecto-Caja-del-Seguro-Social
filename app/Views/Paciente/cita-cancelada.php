
    <!-- //Navbar de paciente -->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Citas programadas</li>
            <li class="breadcrumb-item active" aria-current="page">Cita Cancelada</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">Cita Cancelada Correctamente</h4>
            <br>

            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=ayuda">Contáctanos</a>
            </p>
            <br>
            <a class="btn" href="?controller=Paciente&&action=index" role="button"
                style="background-color: #0053a3; color: white;">Menú Principal</a>
            <br><br><br>
        </div>
    </div>

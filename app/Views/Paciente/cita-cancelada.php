
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
            <h4 class="display-4">Usted ha cancelado su cita</h4>
            <br>
            <a class="btn" href="?controller=Paciente&&action=index" role="button"
                style="background-color: #005C8F; color: white;">Menú Principal</a>

        </div>
    </div>

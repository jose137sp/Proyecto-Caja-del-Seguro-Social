    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

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
        <tbody>
        <h4 class="display-4">¡Cita Agendada!</h4><br>
            <?php 
            {?>
                <tr>
                    <h5 class="diplay-5">Numero de cita: <?php echo $num["numero_cita"] ?></h5><br>
                    <h5 class="display-5">Fecha: <?php echo $fec["fecha_cita"] ?></h5><br>
                </tr>
            <?php }
            ?>
        </tbody> 
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=">Contáctanos</a>
            </p>
            <p class="lead">
                <a class="btn" href="?controller=Paciente&&action=index" role="button" style="background-color: #0053a3; color: white;">Menú principal</a>
            </p>
        </div>
    </div>
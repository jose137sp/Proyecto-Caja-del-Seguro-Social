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
            <?php 
            if ($datos){?>
                <tr>
                    <td>Numero de cita: <?php echo $numero_cita?></td><br>
                    <td>Fecha: <?php echo $fecha?></td><br>
                    <td>Policlinica: <?php echo $estado?></td><br>
                </tr>
            <?php }
            ?>
            </tbody> 
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=">Contáctanos</a>
            </p>
            <p class="lead">
                <a class="btn" href="?controller=Paciente&&action=index" role="button" style="background-color: #005C8F; color: white;">Menú principal</a>
            </p>
        </div>
    </div>
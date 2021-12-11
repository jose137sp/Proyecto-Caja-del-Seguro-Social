
<head>
    <title>Cita de Control - Confirmación</title>
</head>

<body>

    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Medico/navbar-medico.php') ?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Registrar Datos</li>
            <li class="breadcrumb-item active" aria-current="page">Datos Registrados</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">Citas agendadas</h4>
            <br>
            <tbody>
            <?php 
            foreach($datos as $fecha){?>
                <td><?php echo $fechas["numero_cita"] ?></td>
                <td><?php echo $fechas["id_policlinica"] ?></td>
                <td><?php echo $fechas["fecha_cita"] ?></td>
                <td><?php echo $datos["estado"] ?></td>
            <?php }
            ?>
            </tbody>    
            <p class="lead">Ahora podrá solicitar una cita médica</p>
            <br>
            <p class="lead">
                <a class="btn" href="?controller=Medico&&action=index" role="button" style="background-color: #0053a3; color: white;">Menú Principal</a>
            </p>
            <br><br>
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=ayuda">Contáctanos</a>
            </p>
        </div>
    </div>



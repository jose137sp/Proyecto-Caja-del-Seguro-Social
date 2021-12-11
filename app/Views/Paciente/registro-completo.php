
<head>
    <title>Cita de Control - Confirmación</title>
</head>

<body>

    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

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
            <h4 class="display-4">¡Datos registrados correctamente!</h4>
            <br>
            <tbody>
            <?php 
            if ($datos){?>
                <tr>
                    <td>Nombres: <?php echo $nombres?></td><br>
                    <td>Apellidos: <?php echo $apellidos ?></td><br>
                    <td>Cedula: <?php echo $cedula  ?></td><br>
                    <td>Fecha de nacimiento: <?php echo $fechanac ?></td><br>
                </tr>
            <?php }
            ?>
            </tbody>    
            <p class="lead">Ahora podrá solicitar una cita médica</p>
            <br>
            <p class="lead">
                <a class="btn" href="?controller=Paciente&&action=cita_nueva" role="button" style="background-color: #0053a3; color: white;">Solicitar cita médica</a>
            </p>
            <br><br>
            <hr>
            <p>
                ¿Tienes problemas? <a href="?controller=Paciente&&action=ayuda">Contáctanos</a>
            </p>
        </div>
    </div>



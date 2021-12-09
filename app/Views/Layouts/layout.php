<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once ('meta.php') ?>
    <title>Gestión de Citas Médicas via Web</title>
</head>

<body>
    <header>
        <!--Logo de página. -->
        <?php require_once('header.php'); ?>
    </header>

        <!-- //Navbar de opciones de paciente-->
    <?php include('navbar-paciente.php'); ?> 

    <!-- // El header y navbar se mantendrán estáticos, lo que cambiará será la información de la página, por lo que routes.php
            determinará dicha información -->
    <section>
        <?php require_once('routes.php'); ?>
    </section>

    <?php require_once('scripts.php'); ?>
</body>

</html>
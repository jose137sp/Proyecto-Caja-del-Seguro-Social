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

        <!-- //Navbar de opciones -->
    <?php require_once('navbar-paciente.php'); ?> 

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
        </ol>
    </nav>

    <!-- // El header y navbar se mantendrán estáticos, lo que cambiará será la información de la página, por lo que routes.php
            determinará dicha información -->
    <section>
        <?php require_once('routes.php'); ?>
    </section>

    <?php require_once('scripts.php'); ?>
</body>

</html>
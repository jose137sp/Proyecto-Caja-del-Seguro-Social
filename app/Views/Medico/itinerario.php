
<?php session_start()?>

<head>
    <title>Consultar Itinerario</title>
</head>

    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('navbar-medico.php') ?>

<body>
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Medico&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Consultar Itinerario</li>
            <li class="breadcrumb-item active" aria-current="page">Elegir Fecha</li>
        </ol>
    </nav>

<!-- Contenido de la sección -->
<div class="container-fluid">
        <form action="?controller=Medico&&action=consultar_dia" method="POST">
            <h3>Consultar Itinerario</h3><br>
            <div class="form-group">
                <label>Fecha a consultar</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" required>
            </div>
            <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Consultar</button>
        </form>
    </div>
<?php
include "bdd.php";
include "registro.php";
insertarDatos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CSS - Registrarse</title>
</head>

<body>
    <!-- //Navbar de logo -->
    <nav class="navbar navbar-dark" style="background-color: #005C8F;">
        <a class="navbar-brand" href="index.html">
            <img src="Imagenes/logo.png" width="100%" height="50" alt="" class="img-thumbnail" style="background-color: #005C8F; border: #005C8F;">
        </a>
    </nav>
    <!-- //Navbar de opciones -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="navbar py-lg-0" id="navbarSupportedContent" style="padding-left: 0;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Programar Cita Médica
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cita-nueva.html">Cita nueva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cita-control.html">Cita de control</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Citas Programadas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="consultar-estado.html">Consultar estado de cita</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ayuda.html">Ayuda</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="cita-nueva.html">Cita Nueva</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrar datos</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">


        <form action=login_insert.php method="post">
            <h3>Registrar datos</h3><br>
            <p>Ingresa tu información personal</p>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name='nombres'
                            placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name='apellidos'
                            placeholder="Ingrese sus apellidos" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Número de Cédula</label>
                        <input type="text" class="form-control" id="cedula" name='cedula'
                            placeholder="Ingrese su número de Cédula (X-XXX-XXXX)" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechanac" name='fechanac' placeholder="" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Tipo de Sangre</label>
                        <input type="text" class="form-control" id="tipo_sangre" name='tipo_sangre'
                            placeholder="(Ejemplo: O+)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección residencial</label>
                    <input type="text" class="form-control" id="direccion" name='direccion'
                        placeholder="Calle, barrio, número de residencia" required>
                </div>
                <p style="color: #ff7300;">⚠ Verifica que tu información esté totalmente correcta</p>
                <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Finalizar Registro</button>
            </form>

    </div>



    <!-- //Scripts Boostrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>

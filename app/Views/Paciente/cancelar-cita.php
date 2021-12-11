<head>
    <title>Cancelar Cita</title>
</head>
    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Citas programadas</li>
            <li class="breadcrumb-item active" aria-current="page">Cancelar</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">

        <form action="?controller=Paciente&&action=cita_cancelada" method="POST">
            <h3>Cancelar Cita Médica</h3><br>
            <div class="form-group">
                <label>Número de Cédula</label>
                <input type="text" class="form-control" id="cedula" name="cedula"
                    placeholder="Ingrese su número de Cédula (X-XXX-XXXX)" required>
                <small id="emailHelp" class="form-text text-muted">Esta información no será compartida con
                    nadie.</small>
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="" required>
            </div>
            <div class="form-group">
                <label>Número de cita</label>
                <input type="number" class="form-control" id="numero_cita" name="numero_cita"
                    placeholder="Ingrese su número de cita" required>
            </div>
            <hr>
            <div class="form-group">
                <label style="color: #DC143C;">Escribe "Cancelar" y presiona el botón para confirmar esta acción.</label>
                <input type="text" class="form-control" id="cedula" name="verificador"
                    placeholder="" required>
            </div>
            <p style="color: #ff7300;">⚠ ATENCIÓN, Esta acción no se puede revertir.</p>
            <button type="submit" name="verificar" value="verificar" class="btn" style="background-color: #DC143C; color: white;">Cancelar</button>
        </form>

    </div>
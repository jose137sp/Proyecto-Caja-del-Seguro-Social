
<body>
    <!-- //Navbar de opciones -->
    <?php require_once ('navbar-medico.php')?>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Medico&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item active" aria-current="page">Cita de Control</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">

        <form action="?controller=Medico&&action=datos_paciente" method="POST">
            <h3>Solicitar Cita de Control</h3><br>
            <div class="form-group">
                <label>Número de Cédula</label>
                <input type="text" class="form-control" id="validationDefault01"
                    placeholder="Número de Cédula (X-XXX-XXXX)" required>
                <small id="emailHelp" class="form-text text-muted">Esta información no será compartida con
                    nadie.</small>
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" class="form-control" id="validationDefault01" placeholder="" required>
            </div>
            <div class="form-group">
                <label>Número de cita</label>
                <input type="number" class="form-control" id="validationDefault01"
                    placeholder="Número de cita" required>
            </div>
            <button type="submit" class="btn" style="background-color: #0053a3; color: white;">Verificar</button>
        </form>


    </div>
</body>

</html>
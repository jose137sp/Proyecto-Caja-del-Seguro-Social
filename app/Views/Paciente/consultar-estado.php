<head>
    <title>Consultar estado de cita</title>
</head>

    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Citas programadas</li>
            <li class="breadcrumb-item active" aria-current="page">Consultar estado de cita</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">

        <form action="?controller=Paciente&&action=cita_consultada">
            <h3>Consultar estado de cita</h3><br>
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
            <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Verificar</button>
        </form>

    </div>
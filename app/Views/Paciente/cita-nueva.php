
<head>
    <title>Solicitar Cita Nueva</title>
</head>

<body>
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item active" aria-current="page">Cita Nueva</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">


        <form action="cita-nueva-datos.html">
            <h3>Solicitar Cita Nueva</h3><br>
            <p>¿Has solicitado una cita anteriormente?</p>
            <div>
                <a class="a" href="?controller=Paciente&action=registrarse" style="color: #005C8F; font-weight: bold;">No, registrar
                    datos por primera vez</a>
                <br>
                <hr>
            </div>
            <div class="form-group">
                <p style="font-weight: lighter;">Sí, ya he solicitado citas anteriormente</p>
                <label>Número de Cédula</label>
                <input type="text" class="form-control" id="validationDefault01"
                    placeholder="Ingrese su número de Cédula (X-XXX-XXXX)" required>
                <small id="emailHelp" class="form-text text-muted">Esta información no será compartida con
                    nadie.</small>
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" class="form-control" id="validationDefault01" placeholder="" required>
            </div>
            <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Solicitar</button>
        </form>
    </div>

</body>
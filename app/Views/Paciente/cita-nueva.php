
<?php session_start()?>

<head>
    <title>Solicitar Cita Nueva</title>
</head>

    <!-- //Navbar de opciones de paciente-->
    <?php require_once ('Views/Layouts/navbar-paciente.php') ?>

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

    <!-- Formulario cita nueva -->
        <div class="container-fluid">
            <form action="?controller=Paciente&&action=cita_nueva_solicitada" method="POST">
                <h3>Solicitud de cita médica</h3>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Número de Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su número de Cédula (X-XXX-XXXX)">
                        <small id="emailHelp" class="form-text text-muted">Esta información no será compartida con nadie.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Número de celular</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="6XXXXXXX (Sin guiones)" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Policlínica</label>
                        <select id="policlinica" name="policlinica" class="form-control"  required>
                            <option for="Doctor_Arnulfo" value="1" >Complejo Hospitalario Arnulfo Arias</option>
                            <option for="Carlos_Brin"  value="2" >Policlínica de la CSS Dr. Carlos N. Brin</option>
                            <option for="Manuel_Ferrer"  value="3" >Policlínica Dr. Manuel Ferrer Valdés</option>
                            <option for="Alejandro_Guardia"  value="4" >Policlínica Alejandro De La Guardia</option>
                            <option for="Generoso_CSS"  value="5" >Policlínica Dr. Generoso Guardia Caja De Seguro Social</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Especialidad</label>
                        <select id="especialidad" name="especialidad" class="form-control" required>
                            <option for="especialidad"  value="1">Neurología</option>
                            <option for="especialidad"  value="2">Cardiología</option>
                            <option for="especialidad"  value="3">Gineco-obstetricia</option>
                            <option for="especialidad"  value="4">Oftalmología</option>
                            <option for="especialidad"  value="5">Geriatría</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="submit" value="enviar" class="btn" style="background-color: #0053a3; color: white;">Enviar Solicitud</button>
            </form>
        </div>
    </div>
</body>
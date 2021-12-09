
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="?controller=Paciente&&action=cita_nueva">Cita Nueva</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de la cita</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <form action="?controller=Paciente&&action=cita_nueva_registrada" method="POST">
            <h3>Datos de la cita nueva</h3><br>
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
                        <option for="Doctor_Arnulfo" name="policlinica" value="1" >Complejo Hospitalario Arnulfo Arias</option>
                        <option for="Carlos_Brin" name="policlinica" value="2" >Policlínica de la CSS Dr. Carlos N. Brin</option>
                        <option for="Manuel_Ferrer" name="policlinica" value="3" >Policlínica Dr. Manuel Ferrer Valdés</option>
                        <option for="Alejandro_Guardia" name="policlinica" value="4" >Policlínica Alejandro De La Guardia</option>
                        <option for="Generoso_CSS" name="policlinica" value="5" >Policlínica Dr. Generoso Guardia Caja De Seguro Social</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Especialidad</label>
                    <select id="especialidad" name="especialidad" class="form-control" required>
                        <option for="especialidad" name="especialidad" value="1">Neurología</option>
                        <option for="especialidad" name="especialidad" value="2">Cardiología</option>
                        <option for="especialidad" name="especialidad" value="3">Gineco-obstetricia</option>
                        <option for="especialidad" name="especialidad" value="4">Oftalmología</option>
                        <option for="especialidad" name="especialidad" value="5">Geriatría</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit" value="enviar" class="btn" style="background-color: #005C8F; color: white;">Enviar Solicitud</button>
        </form>
    </div>
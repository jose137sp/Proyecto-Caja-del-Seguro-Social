
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="cita-nueva.html">Cita Nueva</a></li>
            <li class="breadcrumb-item active" aria-current="page">Datos de la cita</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <form action="cita-nueva-confirmacion.html">
            <h3>Datos de la cita nueva</h3><br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Correo electrónico</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Número de celular</label>
                    <input type="number" class="form-control" id="validationDefault01" placeholder="6XXXXXXX (Sin guiones)" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Policlínica</label>
                    <select id="inputState" class="form-control"  required>
                        <option selected>Policlínica especializada de la Caja del Seguro Social</option>
                        <option>Policlínica de la CSS Dr. Carlos N. Brin</option>
                        <option>Policlínica Dr. Manuel Ferrer Valdés</option>
                        <option>Policlínica Alejandro De La Guardia</option>
                        <option>Policlínica Dr. Generoso Guardia Caja De Seguro Social</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Especialidad</label>
                    <select id="inputState" class="form-control" required>
                        <option selected >Neurología</option>
                        <option>Cardiología</option>
                        <option>Gineco-obstetricia</option>
                        <option>Oftalmología</option>
                        <option>Geriatría</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Enviar Solicitud</button>
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
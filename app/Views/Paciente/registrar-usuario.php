 <!-- //  Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../Layouts/layout.php">Inicio</a></li>
            <li class="breadcrumb-item">Programar Cita Médica</li>
            <li class="breadcrumb-item"><a href="cita-nueva.html">Cita Nueva</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrar datos</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">

        <form action="?controller=Paciente&&action=guardar" method="POST">
            <h3>Registrar datos</h3><br>
            <p>Ingresa tu información personal</p>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" id="Nombres" name="Nombres"
                            placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="Apellidos" name="Apellidos"
                            placeholder="Ingrese sus apellidos" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Cedula">Número de Cédula</label>
                        <input type="text" class="form-control" id="Cedula" name= "Cedula"
                            placeholder="Ingrese su número de Cédula (X-XXX-XXXX)" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for Fechanac>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="Fechanac" name="Fechanac" placeholder="" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Tipo_Sangre">Tipo de Sangre</label>
                        <input type="text" class="form-control" id="Tipo_Sangre" name="Tipo_Sangre"
                            placeholder="(Ejemplo: O+)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Direccion">Dirección residencial</label>
                    <input type="text" class="form-control" id="Direccion" name="Direccion"
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
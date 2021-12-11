<!-- //Navbar de opciones de paciente-->
<?php require_once ('Views/Layouts/navbar-paciente.php') ?>


<!-- //  Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&action=index">Inicio</a></li>
            <li class="breadcrumb-item">Paciente Nuevo</li>
            <li class="breadcrumb-item active" aria-current="page">Registro de información personal</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">

        <form action="?controller=Paciente&action=guardar" method="POST">
            <h3>Registrar datos</h3><br>
            <p>Ingresa tu información personal</p>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres"
                            placeholder="Ingrese sus nombres" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos"
                            placeholder="Ingrese sus apellidos" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cedula">Número de Cédula</label>
                        <input type="text" class="form-control" id="cedula" name= "cedula"
                            placeholder="Ingrese su número de Cédula (X-XXX-XXXX)">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fechanac">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fechanac" name="fechanac" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tipo_sangre">Tipo de Sangre</label>
                        <input type="text" class="form-control" id="tipo_sangre" name="tipo_sangre"
                            placeholder="(Ejemplo: O+)">
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección residencial</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                        placeholder="Calle, barrio, número de residencia">
                </div>
                <p style="color: #ff7300;">⚠ Verifica que tu información esté totalmente correcta</p>
                <button type="submit" class="btn" name="submit" value="Insertar" style="background-color: #0053a3; color: white;">Finalizar Registro</button>
            </form>

    </div>
</body>

</html>
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Paciente&action=index">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ayuda</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">¿En qué podemos ayudarte?</h4>
            <p class="lead">Estamos aquí para ti y para contestar cualquier pregunta que tengas. Esperamos escuchar de
                ti pronto.</p>
            <div class="container" style="background-color: white">
                <hr>
                <h4 style="font-size: xx-large; font-weight: normal;">Preguntas frecuentes</h4>
                <hr>
                <p style="font-weight: bold; font-size: larger;">¿Cómo registrarse siendo un nuevo usuario en el sitio
                    web de la Caja de Seguro Social?
                </p>
                <p>Para poder registrarse como usuario nuevo en el sitio web de la Caja de Seguro Social, se debe
                    acceder a “Programar cita médica” desde el menú superior y seleccionar la opción “Cita nueva”. Se
                    debe seleccionar la opción “Soy un paciente nuevo”, para registrar los datos en el formulario de
                    paciente nuevo. Una vez llenados los campos, se presiona la opción “Registrar” y estarás listo para
                    seguir navegando como un usuario registrado.</p>
                <hr>
                <p style="font-weight: bold; font-size: larger;">¿Cómo reservar una cita nueva?
                </p>
                <p>Para poder reservar una cita nueva en el sitio web de la Caja de Seguro Social, se debe acceder a
                    “Programar cita médica” desde el menú superior y seleccionar la opción “Cita nueva”. Se deben llenar
                    los campos en pantalla y presionar “Solicitar”. Luego se rellenan los datos de contacto del paciente
                    y se confirman los datos de la cita.</p>
                <hr>
                <p style="font-weight: bold; font-size: larger;">¿Quieres cancelar tu cita?
                </p>
                <p>Para poder cancelar una cita en el sitio de la Caja de Seguro Social, solo debe ingresarse a “Citas
                    programadas” desde el menú superior y seleccionar la opción “Consultar estado de cita”. Allí, se
                    puede encontrar la opción “Cancelar cita”, una vez presionada, se debe confirmar la acción y de esa
                    manera, se cancelará la cita consultada.</p>
                <hr>
            </div>

        </div>
        <form>
            <p>¿Sigues con problemas? Completa el siguiente formulario y muy pronto te ayudaremos.</p>
            <form>
                <div class="form-group">
                    <label>Nombre completo</label>
                    <input type="text" class="form-control" id="validationDefault01"
                        placeholder="Ingresa tu nombre y apellido" required>
                </div>
                <div class="form-group">
                    <label>Correo eléctronico</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Mensaje o duda</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="150 caracteres max." required></textarea>
                </div>
                <button type="submit" class="btn" style="background-color: #005C8F; color: white;">Enviar</button>
                <hr>
            </form>
    </div>
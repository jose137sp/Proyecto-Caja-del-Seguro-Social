    <?php require_once('navbar-medico.php') ?>;   <!-- //Navbar de opciones -->
 
    <!-- // El breadcrumb cambia en cda página. OJO CON ESTO. -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=Medico&&action=index">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ayuda</li>
        </ol>
    </nav>

    <!-- Contenido de la sección -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h4 class="display-4">¿En qué podemos ayudarte?</h4>
            <p class="lead">Estamos aquí para ti y para contestar cualquier pregunta que tengas. Esperamos escuchar de
                ti pronto.</p>

        </div>
        <form>
            <p>Completa el siguiente formulario y muy pronto te ayudaremos.</p>
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
                <button type="submit" class="btn" style="background-color: #0053a3; color: white;">Enviar</button>
                <hr>
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
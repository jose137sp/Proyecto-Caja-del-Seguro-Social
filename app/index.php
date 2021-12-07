<?php

/*Este archivio le permite al apache acceder a la aplicación*/
require_once("Db/db.php"); //Permite incluir el archivo que contiene la conexión a la BD

if (isset($_GET['controller']) && isset($_GET['action'])) {  //Si existe un controlador (Controller) y una accion (action)
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else { //Si no existe un controlador ni una accion (Sucede cuando se accede por primera vez al sistema)
    $controller = 'Home';
    $action = 'index';
}

require_once('Views/Layouts/layout.php'); //Layout.php es el template de la página, se utilizará para toda la aplicación

?>
<?php

$connection = mysqli_connect('localhost', 'root','','gestion_citas');
    
    if ($connection){
        echo "Conexión Exitosa";
    }

else{
    die("Conexion Errada");
}
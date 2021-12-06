<?php
include "bdd.php";
function insertarDatos(){
    if(isset($_POST['submit'])){
        global $connection;
        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $fechanac = $_POST['fechanac'];
        $tipo_sangre = $_POST['tipo_sangre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];

    $query=INSERT INTO Paciente(cedula,nombres,apellidos,fechanac,tipo_sangre,telefono,email,direccion) VALUES('$cedula','$nombres','$apellidos','$fechanac','$tipo_sangre','$telefono','$email','$direccion');
    $result = mysqli_query($connection. $query);

    if($result){
        echo "Registro completo";
        }
        else
        {
            die('Inserción de datos fallida'.mysqli.error());
        }

    mysqli_close($connection);
    }
}
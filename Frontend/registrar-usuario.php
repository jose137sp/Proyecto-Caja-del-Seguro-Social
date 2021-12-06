<?php 
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$nCedula = $_POST['nCedula'];
$dateBirth = $_POST['dateBirth'];
$Bloodtype = $_POST['Bloodtype'];
$inputAddress2 = $_POST['inputAddress2'];


$conn = new mysqli('localhost','root','','citas_medicas');
    if ($conn ->connect_error){
        die('conneción fallida: '.$conn->connect_error);
    }
    else{
        $stmt = $conn -> prepare("insert into Paciente(Nombres, Apellidos, nCedula, dateBirth, Bloodtype, inputAddress2) values(?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("ssssss", $Nombres, $Apellidos, $nCedula, $dateBirth, $Bloodtype, $inputAddress2);
        $stmt -> execute(); 
        echo "Registro exitoso";
        $stmt -> close();
        $conn -> close();
    }
?>
<?php 
 $nCedula = $_POST['nCedula'];
 $dateBirth = $_POST['dateBirth'];

$conn = new mysqli('localhost','root','','citas_medicas');
    if ($conn ->connect_error){
        die('conneción fallida: '.$conn->connect_error);
    }
    else{
        $stmt = $conn -> prepare("");}
?>
<?php


require_once('Models/PacienteModel.php');

class PacienteController
{
    function __construct()
    {
        
    }

    function registrar(){
        require_once('Views/Cliente/registrar.php');
    }
}
?>
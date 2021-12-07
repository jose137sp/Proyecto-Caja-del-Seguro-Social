<?php

class PacienteController
{
    function __construct()
    {

    }

    function registrarse(){
        $paciente= new PacienteModel();
        $registro= $paciente->registrar();
        require_once('Views/Paciente/registrar-usuario.php');
    }
}

?>
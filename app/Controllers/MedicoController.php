<?php

require_once('Models/MedicoModel.php');
class MedicoController
{
    function __construct()
    {
        
    }

    function login()
    {   
        require_once('Views/Medico/medico-login.php');
    }

    function index()
    {   
        require_once('Views/Medico/medico-index.php');
    }

    function cita_control()
    {
        require_once('Views/Medico/medico-cita-control.php');
    }

    function datos_paciente()
    {
        require_once('Views/Medico/medico-cita-control-busqueda.php');
    }

    public function datos_cita(){
        require_once('Views/Medico/medico-cita-control-busqueda.php');
    }
}

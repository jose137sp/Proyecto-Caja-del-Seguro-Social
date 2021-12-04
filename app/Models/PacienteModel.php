<?php

class PacienteModel
{
    private $database;
    private $pacientes;

    public function __construct()
    {
        $this->database = Conexion::conectar();
        $this->pacientes = array();
    }

    


}

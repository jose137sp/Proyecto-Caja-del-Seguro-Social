<?php

use PharIo\Manifest\Requirement;

class PacienteModel
{
    private $pacientes;
    private $db;

    public function __construct()
    {
        $this->pacientes = array();
        $this->db = Conexion::conectar();
    }

    public function listar()
        {
            $this->pacientes = $this->obtenerPacientes();
                        //Algoritmo para registrar un usuario
        }

    public function obtenerPacientes()
        {

            $consulta = $this->db->query("SELECT * from paciente;");
            while($filas = $consulta -> fetch_assoc()) {
                $pacientes[] = $filas;
            }
            return $pacientes;
        }

    public function verificarPaciente($cedula_paciente)
    {
        $consulta = $this->db->query("SELECT count(*) as contador from paciente where cedula = '" . $cedula_paciente . "';");
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function registrarPaciente($nombres, $apellidos, $cedula, $fechanac, $tipo_sangre, $direccion)
    {
        $consulta = $this->db->query("INSERT INTO paciente (nombres, apellidos, cedula, fechanac, tipo_sangre, direccion)
            VALUES ('" . $nombres . "','" . $apellidos . "','" .$cedula . "','" . $fechanac . "','" . $tipo_sangre . "','" . $direccion . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
            
    }
}
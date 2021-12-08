<?php

use PharIo\Manifest\Requirement;
class PacienteModel
{
    private $pacientes;
    private $db;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->pacientes = array();
    }

    public function registrar()
        {
            $this->pacientes = $this->obtenerPacientes();
                        //Algoritmo para registrar un usuario
        }

    public function obtenerPacientes()
        {

            $consulta = $this->db->query("select * from paciente;");
            while($filas = $consulta -> fetch_assoc()) {
                $pacientes[] = $filas;
            }
            return $pacientes;
        }

    public function verificarPaciente($cedula_paciente)
    {
        $consulta = $this->db->query("select count(*) as contador from paciente where cedula = '" . $cedula_paciente . "';");
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0){
            return true;
        } else {
            return false;
        }
    }

    public function registrarPaciente($data)
    {
        $consulta = $this->db->query("INSERT INTO paciente (nombres, apellidos, cedula, fechanac, tipo_sangre, direccion)
            values ('" . $data['nombres'] . "','" . $data['apellidos'] . "','" .$data['cedula'] . "','" . $data['fechanac'] . "','" . $data['tipo_sangre'] . "','" . $data['direccion'] . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }
}
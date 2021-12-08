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

    public function verificarDatosPaciente($cedula_paciente,$fechanac)
    {
        $consulta1 = $this->db->query("SELECT count(*) as contador1 from paciente where cedula= '" . $cedula_paciente . "';");
        $cedula_existe = $consulta1->fetch_assoc();
        $consulta2 = $this->db->query("SELECT count(*) as contador2 from paciente where fechanac= '" . $fechanac . "';");
        $fechanac_existe = $consulta2->fetch_assoc();

        if (($cedula_existe['contador1'] > 0) && ($fechanac_existe['contador2'] > 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function asignarCita($email, $telefono, $policlinica, $especialidad){



    }
    


}
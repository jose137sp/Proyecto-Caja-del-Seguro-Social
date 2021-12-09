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

    public function verificarPaciente($cedula_paciente)
    {
        //Punteros que permiten verificar la existencia de información en la BDD
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
        //Punteros que permiten verificar la existencia de información en la BDD
        $consulta = $this->db->query("INSERT INTO paciente (nombres, apellidos, cedula, fechanac, tipo_sangre, direccion)
            VALUES ('" . $nombres . "','" . $apellidos . "','" .$cedula . "','" . $fechanac . "','" . $tipo_sangre . "','" . $direccion . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
            
    }

    public function verificarDatosPaciente($cedula,$fechanac)
    {
        $consulta = $this->db->query("SELECT count(*) as contador from paciente where cedula = '" . $cedula . "' and fechanac = '" . $fechanac . "';"  );
        //Puntero que permiten verificar la existencia de información en la BDD
        $existe = $consulta->fetch_assoc();
        if (($existe['contador'] > 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function asignarCita($email, $telefono, $policlinica, $especialidad, $fecha, $cedula){



    }

    public function verificarDatosCita($cedula, $fechanac, $numero_cita){

        //Punteros que permiten verificar la existencia de información en la BDD
        $consulta1 = $this->db->query("SELECT count(*) as contador1 from cita_paciente where cedula= '" . $cedula . "';");
        $cedula_existe = $consulta1->fetch_assoc();
        $consulta2 = $this->db->query("SELECT count(*) as contador2 from paciente where fechanac= '" . $fechanac . "';");
        $fechanac_existe = $consulta2->fetch_assoc();
        $consulta3 = $this->db->query("SELECT count(*) as contador2 from cita_paciente where fechanac= '" . $numero_cita . "';");
        $cita_existe = $consulta3->fetch_assoc();

        if ((($cedula_existe['contador1'] > 0) && ($fechanac_existe['contador2'] > 0) && ($fechanac_existe['contador2'] > 0))) {
            return true;
        } else {
            return false;
        }
    }


    //Esta función permite imprimir la información del paciente una vez se registra
    public function info($cedula){
            $this->pacientes = $this->obtenerPaciente($cedula);
            return $this->pacientes;
        }

    //Permite obtener la información de paciente desde la tabla paciente
    public function obtenerPaciente($cedula)
    {
        $consulta = $this->db->query("SELECT * FROM paciente WHERE cedula = '" . $cedula . "';");
        return $consulta;
    }
}
    
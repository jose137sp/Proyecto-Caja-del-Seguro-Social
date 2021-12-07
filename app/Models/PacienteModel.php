<?php
class PacienteModel
{
    private $db;
    private $pacientes;

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
        $consulta = $this->db->query("select count(*) as contador from paciente where nCedula = '" .$cedula_paciente . "';");
        $cantidad_pacientes = $consulta->fetch_assoc();
        if ($cantidad_pacientes['contador'] > 0){
            return true;
        } else {
            return false;
        }
    }

    public function registrarPaciente($data)
    {
        $consulta = $this->db->query("insert into paciente (Nombres, Apellidos, nCedula, dateBirth, Bloodtype, inputAddress2)
        values('" . $data['Nombres'] . "','" . $data['Apellidos'] . "','" . $data['Cedula'] . "','" . $data['Fechanac'] . "','" . $data['Tipo_Sangre'] . "','" . $data['Direccion'] . "');");
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }


}
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


}
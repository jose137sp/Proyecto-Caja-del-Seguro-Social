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

    //funcion que permite asignar una cita a un paciente
    public function asignarCita($cedula, $email, $telefono, $policlinica, $especialidad){

        $estado="Por asistir";
        $fecha_actual = date("Y-m-d");  //Obtiene la fecha actual en la que se está solicitando la cita médica
        $dias = random_int(7, 28);
        $fecha_cita = date("Y-m-d", strtotime($fecha_actual. "+ ".$dias." days"));

        switch($especialidad){
            case 1:
                $id_medico=1;
                break;

            case 2:
                $id_medico=2;
                break;

            case 3:
                $id_medico=3;
                break;

            case 4:
                $id_medico=4;

                break;
            case 5:
                $id_medico=5;
                break;

            default:
                break;
        } 

        
        $consulta = $this->db->query("INSERT INTO citas (fecha_cita, estado, id_especialidad, id_policlinica, cedula_paciente, id_medico)
            VALUES ('" . $fecha_cita . "','" . $estado.  "','" . $especialidad.  "','" . $policlinica.  "','" . $cedula.  "','" . $id_medico. "');");

        $consulta = $this->db->query("INSERT INTO contacto (cedula_paciente, telefono, email)
            VALUES ('" . $cedula . "','" . $telefono . "','" . $email. "');");

        $consulta = $this->db->query("INSERT INTO registro_citas (id_medico, fecha_cita)
            VALUES ('" . $id_medico . "','" . $fecha_cita. "');");

        if ($consulta){
            return true;
        } else{
            return false;
        }
    }


    public function verificarDatosCita($cedula, $fechanac, $numero_cita){

    //Puntero que permiten verificar la existencia de información en la BDD
        $consulta = $this->db->query("SELECT count(*) as contador from citas where cedula_paciente = '" . $cedula . "' and numero_cita = '" . $numero_cita . "';"  );
        $consulta2 = $this->db->query("SELECT count(*) as contador2 from paciente where cedula = '" . $cedula . "' and fechanac = '" . $fechanac . "';"  );
        //Puntero que permiten verificar la existencia de información en la BDD
        $existe_cita = $consulta->fetch_assoc();
        $existe_paciente = $consulta2->fetch_assoc();
        if (($existe_cita['contador'] > 0)&&($existe_paciente['contador2'] > 0)) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion que permite mostrar los datos de la cita segun el numero de cita que reigstra el cliente
    public function cita(){
        $num_cita = $this->db->query("SELECT * FROM citas WHERE numero_cita=(SELECT MAX(id)) FROM citas");
        $consulta = $this->db->query("SELECT * FROM citas WHERE numero_cita = '" . $num_cita . "';");
        $num_cita = ['numero_cita'];
        $fecha = ['fecha_cita'];
        $estado = ['estado'];
        return array ($num_cita, $fecha, $estado);
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

    public function cancelarCita($numero_cita){
        $consulta = $this->db->query("UPDATE `citas` SET `estado` = 'Cancelada' WHERE `citas`.`numero_cita` = $numero_cita");
        return $consulta;
    }

}
    
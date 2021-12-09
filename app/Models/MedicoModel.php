<?php

use PharIo\Manifest\Requirement;

class MedicoModel
{
    private $medicos;
    private $db;

    public function __construct()
    {
        $this->pacientes = array();
        $this->db = Conexion::conectar();
    }

    public function verificarlogin($cedula, $contraseña)
    {
        //Punteros que permiten verificar la existencia de información en la BDD
        $consulta = $this->db->query("SELECT count(*) as contador from usuario where cedula_medico = '" . $cedula . "' and contraseña = '" . $contraseña . "';"  );
        $consulta = $consulta->fetch_assoc();
        if ($consulta['contador'] > 0) {
            return true;
        } else {
            return false;
        }
    }

}
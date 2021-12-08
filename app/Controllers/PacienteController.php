<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
require_once('Models/PacienteModel.php');

class PacienteController
{
    function __construct()
    {

    }

    function index()
    {
        require_once('Views/Layouts/bienvenida.php');
    }

    function registrarse(){
        require_once('Views/Paciente/registrar-usuario.php');
    }

    public function guardar(){
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $cedula=$_POST['cedula'];
            $fechanac=$_POST['fechanac'];
            $tipo_sangre=$_POST['tipo_sangre'];
            $direccion=$_POST['direccion'];  
            
        if(!empty($nombres) && !empty($apellidos) && !empty($cedula)){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarPaciente($cedula);

                if(!$existe_paciente){

                    if($paciente->registrarPaciente($nombres,$apellidos,$cedula,$fechanac,$tipo_sangre,$direccion)){
                        $this->confirmar();

                    }else{
                    $this->error();
                    } 

                }else{
                $this->error();
                } 

            }else{
            
                $this->error();
        }
    }

    public function confirmar(){
        require_once('Views/Paciente/confirmar.php');
    }

    public function error(){
        require_once('Views/Paciente/error.php');
    }

    public function cita_nueva(){
        require_once('Views/Paciente/cita-nueva.php');
    }

    public function cita_control(){
        require_once('Views/Paciente/cita-control.php');
    }

    public function consultar_cita(){
        require_once('Views/Paciente/consultar-estado.php');
    }

    public function ayuda(){
        require_once('Views/Layouts/ayuda.php');
    }

}

?>
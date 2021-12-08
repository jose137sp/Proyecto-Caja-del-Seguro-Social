<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

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
        $data['nombres']=$_POST['nombres'];
        $data['apellidos']=$_POST['apellidos'];
        $data['cedula']=$_POST['cedula'];
        $data['fechanac']=$_POST['fechanac'];
        $data['tipo_sangre']=$_POST['tipo_sangre'];
        $data['direccion']=$_POST['direccion'];

        if(!empty($data['nombres']) && !empty($data['apellidos']) && !empty($Data['cedula'])){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarPaciente($data['cedula']);

            if(!$existe_paciente){
                if($paciente->registrarPaciente($data)){
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
<?php

require_once('Models/MedicoModel.php');
require_once('Models/PacienteModel.php');

//Clase Controlador para médico, la cual se encargará de manejar todos los datos provenientes de la página
class MedicoController
{
    private $db;
    private $pacientes;
    function __construct()
    {
        $this->db = Conexion::conectar();
        $this->medicos = array();
    }


    //Función para redireccionar al login de médico cada vez que se le de click al botón correspondiente
    function login()
    {   
        require_once('Views/Medico/medico-login.php');
    }

    /**
     * Una vez se pasa por el form action POST de login, se necesita de la función verificar para redirigir a la base de datos
     * y consultar si existe ese paciente y si la cédula le corresponde
     */
    public function verificar()
    {   
        $cedula=$_POST['cedula'];
        $contraseña=$_POST['contraseña'];
        if(!empty($cedula) && !empty($contraseña)){ //De ahora en adelante toda función similar verificará que los campos no estén vacíos
            $medico= new MedicoModel();
            $existe_usuario = $medico->verificarlogin($cedula, $contraseña);

            if($existe_usuario){
                $this->index();
            } else{
                require_once ("Views/Medico/failed-login.php");
            }
        }
    }

    public function index(){
        require_once ("Views/Medico/medico-index.php");
    }

    public function cita_medica()
    {
        require_once('Views/Medico/cita-nueva.php');
    }

    public function info_cita_medica()
    {
        $cedula=$_POST['cedula'];
        $fechanac=$_POST['fechanac'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $policlinica=$_POST['policlinica'];
        $especialidad=$_POST['especialidad'];
        
        //Si los campos no están vacíos, verifica su existencia
        if(!empty($cedula) && !empty($fechanac)){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarDatosPaciente($cedula, $fechanac);

                //Si el paciente existe redirigir a la pagina de programar cita, de lo contrario, error
                if($existe_paciente){
                    $paciente = new PacienteModel();
                    $cita_agendada = $paciente -> asignarCita($cedula, $email, $telefono, $policlinica, $especialidad);

                    if($cita_agendada){
                        $num_cita = $this->db->query("SELECT numero_cita FROM citas WHERE numero_cita = (SELECT MAX(numero_cita) FROM citas)");
                        $num= mysqli_fetch_array($num_cita);
                        $fecha = $this->db->query("SELECT fecha_cita FROM citas WHERE numero_cita = (SELECT MAX(numero_cita) FROM citas)");
                        $fec= mysqli_fetch_array($fecha);
                        require_once('Views/Medico/medico-cita-enviada.php');

                    }  else{
                        echo "Cita no agendada, retroceda a la página anterior";
                    }

                }else{
                    echo "No existe el paciente";
                    } 

        }else{
            echo "campos vacíos";
        }
    }

    public function cancelar_cita_medico(){
        require_once('Views/Medico/cancelar-cita-medico.php');
    }

    public function cita_cancelada(){
        
        $cedula=$_POST['cedula'];
        $fechanac=$_POST['fechanac'];
        $numero_cita=$_POST['numero_cita'];
        $verificador=$_POST['verificador'];

        switch ($verificador){

            case "Cancelar":

                $paciente= new PacienteModel();
                $datos_correctos = $paciente->verificarDatosCita($cedula, $fechanac, $numero_cita);
                    if($datos_correctos){
                        $paciente= new PacienteModel();
                        $datos_correctos = $paciente->cancelarCita($numero_cita);
                        require_once('Views/Paciente/cita-cancelada.php');
                    } else{
                        include_once('Views/Error/error-datos-incorrectos.php');
                    }
                break;

            case "cancelar":

                $paciente= new PacienteModel();
                $datos_correctos = $paciente->verificarDatosCita($cedula, $fechanac, $numero_cita);
                    if($datos_correctos){
                        $paciente= new PacienteModel();
                        $datos_correctos = $paciente->cancelarCita($numero_cita);
                        require_once('Views/Paciente/cita-cancelada.php');
                    } else{
                        include_once('Views/Error/error-datos-incorrectos.php');
                    }
                
                break;

            default:
            include_once('Views/Error/error-cancelar.php');
        }
    }


    function ayuda(){
        require_once('Views/Medico/medico-ayuda.php');
    }

    public function itinerario(){
        require_once('Views/Medico/itinerario.php');

    }

    public function consultar_dia(){ 

        $fecha=$_POST['fecha'];
        $num = $this->db->query("SELECT * FROM registro_citas WHERE fecha_cita = $fecha");
        $fechas= mysqli_fetch_array($num);
    
        require_once("Views/Medico/dia-consultado.php");
    }

}

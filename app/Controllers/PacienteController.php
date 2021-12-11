<?php


use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
require_once('Models/PacienteModel.php');
require_once('Models/MedicoModel.php');

class PacienteController
{   
    private $db;
    private $pacientes;

    function __construct()
    {
        $this->db = Conexion::conectar();
        $this->pacientes = array();
        
    }

    function index()
    {
        require_once('Views/Layouts/bienvenida.php');
    }

    function registrarse(){
        require_once('Views/Paciente/registrar-usuario.php');
    }

    //Esta función permite registrar un paciente siguiendo las reglas de modelo de negocio
    public function guardar(){

            //Se guardan los datos registrados en POST a las variables correspondientes
            $nombres=$_POST['nombres'];
            $apellidos=$_POST['apellidos'];
            $cedula=$_POST['cedula'];
            $fechanac=$_POST['fechanac'];
            $tipo_sangre=$_POST['tipo_sangre'];
            $direccion=$_POST['direccion'];  
        
            
        //Variables para la protección contra errores
        /**$nombre_error ="";**/
        //Para cada variable, debe verificar que el campo no esté vacío y cumpla las reglas establecidas.
        /**if(empty(trim($_POST['nombres']))){
            $nombre_error = "El campo nombre no puede estar vacío."; 
        }    elseif(!preg_match('/^[a-zA-Z]+$/', trim($_POST["nombres"]))){
            $nombre_error = "El nombre solo admite letras.";
        } else{
            $nombres = trim($_POST["nombres"]);
        }**/

        
            //Cuando se debe registrar un cliente, se debe verificar que no exista en la base de datos
        
        if(!empty($nombres) && !empty($apellidos) && !empty($cedula) && !empty($fechanac) && !empty($tipo_sangre) && !empty($direccion)){
            $paciente= new PacienteModel();
            $existe_paciente = $paciente->verificarPaciente($cedula);

                if(!$existe_paciente){

                    if($paciente->registrarPaciente($nombres,$apellidos,$cedula,$fechanac,$tipo_sangre,$direccion)){
                        $paciente=new PacienteModel();
                        $datos = $paciente->Info($cedula);
                        require_once('Views/Paciente/registro-completo.php');

                    }else{
                    echo "Error en la conexión a la BDD";
                    $this->error();
                    } 

                }else{
                echo "El paciente ya existe";
                $this->error();
                } 

            }else{
                echo "Debe rellenar todos los campos";
                $this->error();
        }
    }

    public function confirmar(){
        require_once('Views/Paciente/confirmar.php');
    }

    public function error(){
        require_once('Views/Error/error.php');
    }

    public function cita_nueva(){
        require_once('Views/Paciente/cita-nueva.php');
    }

    //Esta funcion verifica que los datos del cliente exitan en la base de datos
    //Una vez revise del POST la cedula y la fecha de nacimiento, verifica mediante verificarDatosPaciente su existencia.
    public function cita_nueva_solicitada(){
        //Variables obtenidas desde el post
        
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
                        require_once('Views/Paciente/cita-nueva-registrada.php');

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

    public function consultar_cita(){
        require_once('Views/Paciente/consultar-estado.php');
    }

    //Esta función permite saber si existe una cita en la base de datos agregada al paciente
    public function cita_consultada(){
        
        $cedula=$_POST['cedula'];
        $fechanac=$_POST['fechanac'];
        $numero_cita=$_POST['numero_cita'];

        //Si los campos no están vacíos, verifica su existencia
        if(!empty($cedula) && !empty($fechanac) && !empty($numero_cita)){

            $paciente= new PacienteModel();
            $existe_cita = $paciente->verificarDatosCita($cedula, $fechanac, $numero_cita);

            if($existe_cita){

                $num_cita = $this->db->query("SELECT numero_cita FROM citas WHERE numero_cita = $numero_cita");
                $num= mysqli_fetch_array($num_cita);
                $fecha = $this->db->query("SELECT fecha_cita FROM citas WHERE numero_cita = $numero_cita");
                $fec= mysqli_fetch_array($fecha);
                $estado = $this->db->query("SELECT estado FROM citas WHERE numero_cita = $numero_cita");
                $est= mysqli_fetch_array($estado);

                include_once('Views/Paciente/cita-consultada.php');

            } else {
                require_once('Views/Error/paciente-noexiste.php');
            }
        }

    }

    public function ayuda(){
        require_once('Views/Layouts/ayuda.php');
    }

    public function cancelar(){
        require_once('Views/Paciente/cancelar-cita.php');
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

}

?>
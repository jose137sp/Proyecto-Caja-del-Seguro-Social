<?php

$controllers = array(
    'Home' => ['index'],
    'Paciente'=>['ayuda', 'cita-control', 'cita-nueva', 'consultar-estado', 'registrarse'],
    'Medico' => ['medico-login']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controller[$controller])){
        call($controller, $action);
    }  else {
        call('Home', 'index');
        }
} else {
    call('Home', 'index');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Paciente':
            $controller = new PacienteController();
            break;
        case 'Medico':
            $controller = new MedicoController();
            break;
        default:
            break;
    }

    $controller->{$action}();
}

?>
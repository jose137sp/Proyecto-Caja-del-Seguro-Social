<?php

$controllers = array(
    'Home' => ['index'],
    'Paciente'=>['ayuda', 'cita-control', 'cita-nueva', 'consultar-estado'],
    'Medico' => ['medico-login']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controller[$controller])){
        call($controller, $action);
        else

    }

}

?>
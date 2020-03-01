<?php 

require_once 'conexion/Conexion.php';
require_once 'controller/Index_controller.php';
require_once 'controller/Tblpacientes_controller.php';


$controller = new Index_controller();
$controller_paciente = new Tblpacientes_controller();

if(!empty($_REQUEST['accion'])){

$metodo = $_REQUEST['accion'];

    switch($metodo){

        case method_exists($controller, $metodo):
            $controller->index();
        break;
                
        default:
        $controller->index();

    }

}else{
    $controller->index();
}

?>
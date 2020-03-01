<?php 

require_once 'model/Tblpacientes_model.php';
require_once 'model/Tbltipodocumento_model.php';
require_once 'model/Tblgenero_model.php';

class Tblpacientes_controller{

    private $model_pacientes;
    private $model_tipodocumento;
    private $model_genero;

    public function __construct(){
        $this->model_pacientes = new Tblpacientes_model();
        $this->model_tipodocumento = new Tbltipodocumento();
        $this->model_genero = new Tblgenero();
    }

    public function menuPacientes(){
        $consultaPacientes =  $this->model_pacientes->consultarPacientes();
        $consultaTipodocumento = $this->model_tipodocumento->consultarTipodocumento();
        $consultaGenero = $this->model_genero->consultarGenero();
        require_once 'view/menuPacientes.php';
    }

    public function guardarPacientes(){
        $dato['numerodocumento'] = $_POST["txtnumerodocumento"];
        $dato['tipodocumento'] = $_POST["seltipodocumento"];
        $dato['nombre'] = $_POST["txtnombre"];
        $dato['apellido'] = $_POST["txtapellido"];
        $dato['genero']=$_POST["selgenero"];
        $dato['edad']=$_POST["txtedad"];
        $this->model_pacientes->insertarPacientes($dato);
        $this->menuPacientes();
    }

}

?>
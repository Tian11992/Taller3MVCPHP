<?php 

require_once 'model/Tblmedicos_model.php';
require_once 'model/Tbltipodocumento_model.php'

class Tblmedicos_controller{

    private $model_medicos;
    private $model_tipodocumento;

    public function __construct(){
        $this->model_medicos = new Tblmedicos_model();
        $this->model_tipodocumento = new Tbltipodocumento();
    }

    public function menuMedicos(){
        $consultaMedicos =  $this->model_medicos->consultarMedicos();
        $consultaTipodocumento = $this->model_tipodocumento->consultarTipodocumento();
        require_once 'view/menuMedicos.php';
    }

    public function guardarMedico(){
        $dato['numerodocumento'] = $_POST["txtnumerodocumento"];
        $dato['tipodocumento'] = $_POST["seltipodocumento"];
        $dato['nombre'] = $_POST["txtnombre"];
        $this->model_medicos->insertarMedico($dato);
        $this->menuMedicos();
    }

}

?>
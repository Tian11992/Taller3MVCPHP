<?php 

require_once 'model/Tbltipodocumento_model.php';

class Tbltipodocumento_controller{

    private $model_tipodocumento;

    public function __construct(){
        $this->model_tipodocumento = new Tbltipodocumento_model();
    }

    public function menuTipodocumento(){
        $consultaTipodocumento =  $this->model_tipodocumento->consultarTipodocumento();
        require_once 'view/menuTipodocumento.php';
    }

    public function guardarTipodocumento(){
        $dato['documento'] = $_POST["txtdocumento"];
        $this->model_tipodocumento->insertarTipodocumento($dato);
        $this->menuTipodocumento();
    }

}

?>
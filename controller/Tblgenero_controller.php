<?php 

require_once 'model/Tblgenero_model.php';

class Tblgenero_controller{

    private $model_genero;

    public function __construct(){
        $this->model_genero = new Tblgenero_model();
    }

    public function menuGenero(){
        $consultaGenero =  $this->model_genero->consultarGenero();
        require_once 'view/menuGenero.php';
    }

    public function guardarGenero(){
        $dato['genero'] = $_POST["txtgenero"];
        $this->model_genero->insertarGenero($dato);
        $this->menuGenero();
    }

}

?>
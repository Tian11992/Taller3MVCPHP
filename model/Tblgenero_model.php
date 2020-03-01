<?php 
class Tblgenero_model{

    private $bd;
    private $tblgenero;

    public function __construct(){
        $this->bd = Conexion::getConexion();
        $this->tblgenero = array();
    }

    public function insertarGenero($dato){
        $nombre = $dato['nombre'];
        $consulta = "INSERT INTO tblgenero (nombre) VALUES ('$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoría");
    }

}

?>
<?php 
class Tbltipodocumento_model{

    private $bd;
    private $tbltipodocumento;

    public function __construct(){
        $this->bd = Conexion::getConexion();
        $this->tbltipodocumento = array();
    }

    public function insertarTipodocumento($dato){
        $nombre = $dato['nombre'];
        $consulta = "INSERT INTO tbltipodocumento (nombre) VALUES ('$nombre')";
        mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoría");
    }

}

?>